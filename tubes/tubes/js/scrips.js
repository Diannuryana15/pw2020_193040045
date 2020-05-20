
function previewImage() {
  const Foto = document.querySelector('.Foto');
  const imgPreview = document.querySelector('.img-preview');


  const oFReader = new FileReader();
  oFReader.readAsDataURL(Foto.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}