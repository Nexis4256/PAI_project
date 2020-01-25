function getUsersByRole()
{
    const apiUrl = 'http://localhost:80/PAIPROJECT';
    const $list = $('.users_list');
    // alert(document.getElementById("check_role").value);

    $.ajax({
        url: apiUrl + '/?page=getUsersByRole',
        dataType: 'json',
        method:'post',
        data:
            {
                role: document.getElementById("check_role").value
            }
    })
    .done((res) => {
            $list.empty();

            res.forEach(el => {
                $list.append(`
                     <div class="row"> 
                        <div class="col-sm-1 p-0  text-center text-danger" style="border:solid 1px white;">ID</div>
                        <div class="col-sm-2 p-0 text-center text-danger"style="border:solid 1px white;">ROLE</div>
                        <div class="col-sm-3 p-0 text-center text-danger"style="border:solid 1px white;">NICKNAME</div>
                        <div class="col-sm-6 p-0 text-center text-danger"style="border:solid 1px white;">EMAIL</div>
                    </div>
                    <div class="row"> 
                        <div class="col-sm-1 p-0  text-center text-light"style="border:solid 1px white;">${el.id}</div>
                        <div class="col-sm-2 p-0 text-center text-light"style="border:solid 1px white;">${el.role}</div>
                        <div class="col-sm-3 p-0 text-center text-light"style="border:solid 1px white;">${el.nickname}</div>
                        <div class="col-sm-6 p-0 text-center text-light"style="border:solid 1px white;">${el.email}</div>
                    </div>

                `);
            });



        });
}