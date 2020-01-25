function swap_left(actuall,gallery_id)
{
    var class_name='.gallery_loop'+gallery_id;
    // alert(actuall);
    // alert(gallery_id);
    // alert(class_name);
    const apiUrl = 'http://localhost:80/PAIPROJECT';
    // alert("XD");
    $.ajax({
        url:apiUrl + '/?page=gallery_image_swap_left',
        method:'post',
        dataType:'json',
        data:
            {
                actuall:actuall,
                gallery_id:gallery_id,
                swap_direction:'left'
            },
        success:function(repository)
        {
            // alert(repository);
            const $tabel = $(class_name);
            // alert($tabel);
            $tabel.empty();
            $tabel.append(`
                                <a onclick="swap_left(${actuall-1},${gallery_id})">
                                    <i class="fas fa-chevron-left text-primary mr-5 fa-2x"></i>
                                </a>
                                <img src="${repository}"
                                 alt="image" style="width:250px; height:250px;">
                                <a onclick="swap_right(${actuall-1},${gallery_id})">
                                <i class="fas fa-chevron-right fa-2x text-primary ml-5"></i>
                                </a>
                                <br>
                                <hr>
                `);

            // alert(repository);
        }
    });

}

function swap_right(actuall,gallery_id,swap_direction)
{
    var class_name='.gallery_loop'+gallery_id;
    // alert(actuall);
    // alert(gallery_id);
    // alert(class_name);
    const apiUrl = 'http://localhost:80/PAIPROJECT';
    // alert("XD");
    $.ajax({
        url:apiUrl + '/?page=gallery_image_swap_left',
        method:'post',
        dataType:'json',
        data:
            {
                actuall:actuall,
                gallery_id:gallery_id,
                swap_direction:'right'
            },
        success:function(repository)
        {
            // alert(repository);
            const $tabel = $(class_name);
            // alert($tabel);
            $tabel.empty();
            $tabel.append(`
                                <a onclick="swap_left(${actuall+1},${gallery_id})">
                                    <i class="fas fa-chevron-left text-primary mr-5 fa-2x"></i>
                                </a>
                                <img src="${repository}"
                                 alt="image" style="width:250px; height:250px;">
                                <a onclick="swap_right(${actuall+1},${gallery_id})">
                                <input type="text" value="${repository}" style="display: none" id="image_dir">
                                <i class="fas fa-chevron-right text-primary ml-5 fa-2x"></i>
                                </a>
                                <br>
                                <hr>
                `);

            // alert(repository);
        }
    });

}