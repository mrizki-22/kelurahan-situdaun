<?php
include '../process/create-berita.php';
// jika ada error baru tampilkan alert
if (count($errors) > 0) {
    echo "<script>";
    foreach ($errors as $key => $value) {
        echo "Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '$value',
        })";
    }
    echo "</script>";
}
?>

<div>
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Berita</h1>
    </div>

    <form action="" method="post" id="FormId" enctype="multipart/form-data">
        <div class="d-flex align-items-center mb-3">
            <input type="text" class="form-control " name="judul" id="judul" placeholder="Judul Berita" required>
        </div>
        <div class="d-flex align-items-center mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile04" accept="image/*" aria-describedby="inputGroupFileAddon04" required name="gambar">
                <label class="custom-file-label" for="inputGroupFile04" id="labelInput">Upload Gambar</label>
            </div>
        </div>


        <input type="hidden" name="slug" />
        <input type="hidden" name="teks_pembuka" />
        <input type="hidden" name="konten" />

        <div id="editor" style="height: 350px;">

        </div>

        <button type="submit" class="btn btn-primary mt-2" name="upload">Upload</button>

    </form>



</div>

<script>
    var form = document.getElementById("FormId");
    var judul = document.getElementById("judul");

    var editor = document.getElementById('editor');
    var toolbarOptions = [
        [{
            'font': []
        }],
        [{
            'size': ['small', false, 'large', 'huge']
        }], // custom dropdown
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote'],
        [{
            'align': [false, 'center', 'right', 'justify']
        }],

        // custom button values
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],

        [{
            'color': []
        }, {
            'background': []
        }], // dropdown with defaults from theme


        ['clean'] // remove formatting button
    ];
    var options = {
        debug: 'info',
        modules: {
            toolbar: toolbarOptions
        },
        placeholder: 'Tulis berita...',
        theme: 'snow'
    };
    var quill = new Quill(editor, options);


    form.onsubmit = function() {
        // check if the editor is empty
        if (quill.getText().trim().length == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Konten berita tidak boleh kosong!',
            })
            return false;
        }

        var konten = document.querySelector('input[name=konten]');
        var slug = document.querySelector('input[name=slug]');
        var teks_pembuka = document.querySelector('input[name=teks_pembuka]');


        slug.value = toSlug(judul.value);
        teks_pembuka.value = quill.getText(0, 150) + '...';
        konten.value = JSON.stringify(quill.getContents());

        return true;
    }

    // change label when file is uploaded

    var input = document.getElementById('inputGroupFile04');
    var label = document.getElementById('labelInput');

    input.addEventListener('change', function(e) {
        var fileName = input.files[0].name;
        label.innerHTML = fileName;
    });



    // title to slug function
    function toSlug(title) {
        //Lowers case everything
        var slug = title.toLowerCase();

        //Removes accents, swap ñ for n, etc
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to = "aaaaeeeeiiiioooouuuunc------";

        for (var i = 0, l = from.length; i < l; i++) {
            slug = slug.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        slug = slug
            .replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return slug;
    }
</script>