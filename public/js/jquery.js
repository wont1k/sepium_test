$(document).ready(function() {
    // AJAX для добалвения пользователя
    $('#addUserForm').on('submit', function(e) {
        e.preventDefault();
        let name = $("[name='name']").val();
        let email = $("[name='email']").val();
        let password = $("[name='password']").val();
        $.ajax({
            url: "/add",
            method: 'POST',
            data: { name: name, email: email, password: password },
            dataType: 'json',
            success: function(response){
                if(response.status === 'success') {
                    alert('Пользователь успешно добавлен');
                    window.location.reload(); // перезагружаем страницу после успешного добавления
                } else {
                    alert('Ошибка при добавлении пользователя');
                }
            },
            error: function(xhr, status, error) {
                alert('Произошла ошибка'); // Ошибка AJAX-запроса
            }
        });
    });

    // AJAX для удаления пользователя
    $(document).on('click', '.del_button', function(e) {
        e.preventDefault();
        let user_id = $(this).prop('id');
        let $row = $(this).closest('tr');
        
        $.ajax({
            url: '/delete',
            method: 'POST',
            data: {id: user_id}, //post переменные
            dataType: 'json',
            success:function(response){
                // в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                if(response.status === 'success') {
                    $row.fadeOut(); // Скрыть строку с эффектом
                } else {
                    alert('Ошибка при удалении. Попробуйте снова.');
                }
            },
            error: function() {
                alert('Ошибка при обработке запроса.');
            }
        });
    }); 

    // AJAX для авторизации пользователя
    $('#autUser').on('submit', function(e) {
        e.preventDefault();
        let userName = $("[name='userName']").val();
        let userPassword = $("[name='userPassword']").val();
        $.ajax({
            url: "/login",
            method: 'POST',
            data: { name: userName, password: userPassword },
            dataType: 'json',
            success: function(response){
                if(response.status === 'success') {
                    alert('Вы успешно авторизовались');
                    window.location.reload(); // перезагружаем страницу после успешной авторизации
                } else {
                    alert('Ошибка:' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Произошла ошибка'); // Ошибка AJAX-запроса
            }
        });
    });

     // AJAX для выхода из системы пользователем
    $('#out_user').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: "/logout",
            method: 'POST',
            data: {submit:true},
            dataType: 'json',
            success: function(response){
                if(response.status === 'success') {
                    window.location.reload(); 
                } else {
                    alert('Ошибка');
                }
            },
            error: function(xhr, status, error) {
                alert('Произошла ошибка'); // Ошибка AJAX-запроса
            }
        });
    });
});