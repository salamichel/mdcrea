<section id="SC_ret_ac1" class="F1 R4 M100">

    <div class="T_STP">
        <h1>Glissez vos photos ici</h1>

        <div>
            <article>
                <div id="holder">
                </div> 
                <p id="upload" class="hidden"><label>Drag &amp; drop not supported, but you can still upload via this input field:<br><input type="file"></label></p>
                <p id="filereader">File API &amp; FileReader API not supported</p>
                <p id="formdata">XHR2's FormData is not supported</p>
                <p id="progress">XHR2's upload progress isn't supported</p>
                <p>Upload progress: <progress id="uploadprogress" min="0" max="100" value="0">0</progress></p>
                <p>Drag an image from your desktop on to the drop zone above to see the browser both render the preview, but also upload automatically to this server.</p>
            </article>
        </div>
        <script>
            var holder = document.getElementById('holder'),
                    tests = {
                filereader: typeof FileReader != 'undefined',
                dnd: 'draggable' in document.createElement('span'),
                formdata: !!window.FormData,
                progress: "upload" in new XMLHttpRequest
            },
            support = {
                filereader: document.getElementById('filereader'),
                formdata: document.getElementById('formdata'),
                progress: document.getElementById('progress')
            },
            acceptedTypes = {
                'image/png': true,
                'image/jpeg': true,
                'image/gif': true
            },
            progress = document.getElementById('uploadprogress'),
                    fileupload = document.getElementById('upload');

            "filereader formdata progress".split(' ').forEach(function(api) {
                if (tests[api] === false) {
                    support[api].className = 'fail';
                } else {
                    // FFS. I could have done el.hidden = true, but IE doesn't support
                    // hidden, so I tried to create a polyfill that would extend the
                    // Element.prototype, but then IE10 doesn't even give me access
                    // to the Element object. Brilliant.
                    support[api].className = 'hidden';
                }
            });

            function previewfile(file) {
                if (tests.filereader === true && acceptedTypes[file.type] === true) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var image = new Image();
                        image.src = event.target.result;
                        image.width = 150; // a fake resize
                        holder.appendChild(image);
                    };

                    reader.readAsDataURL(file);
                } else {
                    holder.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.size ? (file.size / 1024 | 0) + 'K' : '');
                    console.log(file);
                }
            }

            function readfiles(files) {
                //debugger;
                var formData = tests.formdata ? new FormData() : null;
                for (var i = 0; i < files.length; i++) {
                    if (tests.formdata)
                        formData.append('file[]', files[i]);
                    previewfile(files[i]);
                }

                // now post a new XHR request
                if (tests.formdata) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'dnd_upload.php');
                    xhr.onload = function() {
                        progress.value = progress.innerHTML = 100;
                    };

                    if (tests.progress) {
                        xhr.upload.onprogress = function(event) {
                            if (event.lengthComputable) {
                                var complete = (event.loaded / event.total * 100 | 0);
                                progress.value = progress.innerHTML = complete;
                            }
                        }
                    }

                    xhr.send(formData);
                }
            }

            if (tests.dnd) {
                holder.ondragover = function() {
                    this.className = 'hover';
                    return false;
                };
                holder.ondragend = function() {
                    this.className = '';
                    return false;
                };
                holder.ondrop = function(e) {
                    this.className = '';
                    e.preventDefault();
                    readfiles(e.dataTransfer.files);
                }
            } else {
                fileupload.className = 'hidden';
                fileupload.querySelector('input').onchange = function() {
                    readfiles(this.files);
                };
            }

        </script>
    </div>
</section>