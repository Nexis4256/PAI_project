function deleteNews(post_id_value,post_dir_value)
{
    // alert(post_id_value);
    // alert(post_dir_value);
    const apiUrl = 'http://localhost:80/PAIPROJECT';
    $.ajax({
        url:apiUrl + '/?page=deleteNewsPost',
        method:'post',
        dataType:'json',
        data:
            {
                post_id:post_id_value,
                post_dir:post_dir_value
            }
    });
    // moderator_news
    // alert();
    window.location.href = "http://localhost:80/PAIPROJECT/?page=moderator_news";
}