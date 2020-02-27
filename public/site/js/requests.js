//contato
$(function(){
    $('form[name="form_contact"]').submit(function(e){
        e.preventDefault()
        $.ajax({
            url: "{{route('email')}}",
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function(){
                $(".messageBox").addClass('loading')
            },
            success: function(response){
                if (response.success) {
                    $('.messageBox').removeClass('loading')
                    $('form[name="form_contact"] :input').val('')
                    $('input[name="send"]').val('Enviar')
                    $('.messageBox').removeClass('d-none').addClass('text-center alert alert-success').html(response.message)
                } else{
                    $('.messageBox').removeClass('loading')
                    $('.messageBox').removeClass('d-none').addClass('text-center alert alert-danger').html(response.message)
                }
            }
        });
    });
});

//deleteWork
$(function(){
    $('form[name="formDeleteWork"]').submit(function(e){
        e.preventDefault()
        $.ajax({
            url: "{{route('work.destroy', ['works' => $work->id])}}",
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
                $('.messageBox').removeClass('d-none').addClass('waves-effect waves-orange btn').html(response.message)
            }
        })
    })
})

//deleteUser
$(function(){
    $('form[name="formDeleteUser"]').submit(function(e){
        e.preventDefault()
        $.ajax({
            url: "{{route('user.destroy', ['user' => $user->id])}}",
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
                $('.messageBox').removeClass('d-none').addClass('waves-effect waves-orange btn').html(response.message)
            }
        })
    })
})

