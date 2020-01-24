function deleteImage(gallery_id)
{
    var dupa=document.getElementById("image_dir").innerHTML.value;
    alert(dupa);
    const apiUrl = 'http://localhost:80/PAIPROJECT';
    $.ajax({
        url:apiUrl + '/?page=deleteGalleryImage',
        method:'post',
        dataType:'json',
        data:
            {
                gallery_id:gallery_id,
                image_dir:document.getElementById("image_dir").value
            }
    });
    // moderator_news
    // alert();
    window.location.href = "http://localhost:80/PAIPROJECT/?page=moderator_news";
}