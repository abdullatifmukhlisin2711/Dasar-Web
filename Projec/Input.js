
$(document).ready(function(){
 $("#FM").submit(function(e){
    e.preventDefault();

    var kondisi = true;
    // inp.push($(this).val())
    var formData = $(this).serialize();
    // alert(formData);

    $('.centang').each(function(){
        if( $(this).val() == $("#id-mobil").val()){ //mengecek nilai id mobil apakah ada yang sama dari data yang di inputkan 
            kondisi = false;
        }
    })

    if(kondisi){
        $.ajax({
            url: "Input1.php",
            type: "Post",
            data: formData,
            success : function(response){
                location.reload();
            }
        })
    }else{
        alert('Error');
    }
 })
})
