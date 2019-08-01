$(document).ready(function() {

    function roleRequired() {

        if ($('.role:checked').length > 0) {

            $('.role').attr('required', false);
        }
        else {

            $('.role').attr('required', true);
        }
    }

    roleRequired();

    $('.role').on('change', function() {
        
        roleRequired();
    });

    $('.edit-password').on('click', function() {

        var elements = $('#password, #password_confirmation');

        if (elements.first().is(':disabled')) {

            elements.attr('required', true).attr('disabled', false);
        }
        else {

            elements.attr('required', false).attr('disabled', true);
        }
    });

    if ($('#users-table').length) {

        var usersTable = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            ajax: route('back.users.list').toString(),
            columns: [
                { data: 'name', name: 'name' },
                { data: 'firstname', name: 'firstname' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at', className: 'text-center' },
                { data: 'liste_roles', name: 'liste_roles' },
                { data: 'actions', name: 'actions', sortable: false },
            ]
        });

        $('#toggle-sidebar').on('click', function() {

            usersTable.responsive.recalc();
        });

        $('body').on('click', '.delete', function(e) {

            e.preventDefault();

            var form = $(this).closest('form');
            var fullName = $(this).data('firstname') + ' ' + $(this).data('name');

            swal({
                title: Lang._i('Supprimer l\'utilisateur'),
                html: Lang._i('Êtes-vous sûr de vouloir supprimer %s', fullName) + ' ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: Lang._i('Supprimer'),
                cancelButtonText: Lang._i('Annuler')
            }).then(function(result) {

                if (result.value) {
                    
                    form.submit();
                }
            });
        });
    }
});
