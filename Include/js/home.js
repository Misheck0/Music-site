



function formValidate(e){
    e.preventDefault();

    let name = $("#")
}


function count(id){
   let old_value= document.querySelector("#old_value");
    $.ajax({
        url:"count_download.php",
        type:"POST",
        data:{id:id,old_value:old_value.value++},
        success:function (data){
            console.log(data);
        }
    });

 //  console.log(old_value);
}