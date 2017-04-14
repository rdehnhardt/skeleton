<template>
    <div class="users">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title">Cadastro de usuários</h4>
                        <p class="category">Lista de usuários habilitados a acessar o sistema.</p>
                    </div>

                    <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-default" @click="showCreateCompanyForm">
                            <i class="fa fa-plus-circle"></i> Adicionar
                        </button>
                    </div>
                </div>
            </div>

            <p class="m-b-none text-center" v-if="users.length === 0">Nenhum usuário encontrado.</p>

            <div class="content table-responsive">
                <table class="table table-hover" v-if="users.length > 0">
                    <thead>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Cadastrado em</th>
                    </thead>
                    <tbody>
                        <tr class="pointer" v-for="user in users" @click="edit(user)">
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ moment(user.createdAt, "YYYY-MM-DD HH:mm:ss").format("DD/MM/YYYY HH:mm") }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Create Company Modal -->
        <div class="modal fade" id="modal-create-user" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar Usuário</h4>
                    </div>

                    <div class="modal-body">
                            <div class="alert alert-danger" v-if="createForm.errors.length > 0">
                            <p><strong>Whoops!</strong> Alguma coisa esta errada!</p>
                            <br>
                            <ul>
                                <li v-for="error in createForm.errors">
                                    {{ error }}
                                </li>
                            </ul>
                        </div>

                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nome</label>

                                <div class="col-md-8">
                                    <input id="create-user-name" type="text" class="form-control" @keyup.enter="store" v-model="createForm.name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">E-mail</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="email" @keyup.enter="store" v-model="createForm.email">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" @click="store">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Company Modal -->
        <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button " class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                        <h4 class="modal-title">Editar Usuário</h4>
                    </div>

                    <div class="modal-body">
                        <div class="alert alert-danger" v-if="editForm.errors.length > 0">
                            <p><strong>Whoops!</strong> Alguma coisa deu errada!</p>
                            <br>
                            <ul>
                                <li v-for="error in editForm.errors">
                                    {{ error }}
                                </li>
                            </ul>
                        </div>

                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nome</label>

                                <div class="col-md-8">
                                    <input id="edit-user-name" type="text" class="form-control" @keyup.enter="update" v-model="editForm.name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">E-mail</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="email" @keyup.enter="update" v-model="editForm.email">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" @click="destroy(editForm, '#modal-edit-user')">Deletar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" @click="update">Salvar Alterações</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        /*
         * The component's data.
         */
        data() {
            return {
                users: [],

                createForm: {
                    errors: [],
                    name: '',
                    email: ''
                },

                editForm: {
                    errors: [],
                    name: '',
                    email: ''
                }
            };
        },

        /**
         * Prepare the component (Vue 1.x).
         */
        ready() {
            this.prepareComponent();
        },

        /**
         * Prepare the component (Vue 2.x).
         */
        mounted() {
            this.prepareComponent();
        },

        methods: {
            /**
             * Prepare the component.
             */
            prepareComponent() {
                this.getUsers();

                $('#modal-create-user').on('shown.bs.modal', () => {
                    $('#create-user-name').focus();
                });

                $('#modal-create-user').on('hidden.bs.modal', () => {
                    this.getUsers();
                });

                $('#modal-edit-user').on('shown.bs.modal', () => {
                    $('#edit-user-name').focus();
                });

                $('#modal-edit-user').on('hidden.bs.modal', () => {
                    this.getUsers();
                });
            },

            /**
             * Get all of the OAuth users for the user.
             */
            getUsers() {
                axios.get('/api/users').then(response => {
                    this.users = response.data.data;
                });
            },

            /**
             * Show the form for creating new users.
             */
            showCreateCompanyForm() {
                $('#modal-create-user').modal('show');
            },

            /**
             * Create a new OAuth user for the user.
             */
            store() {
                this.persistCompany('post', '/api/users', this.createForm, '#modal-create-user');
            },

            /**
             * Edit the given user.
             */
            edit(user) {
                this.editForm.id = user.id;
                this.editForm.name = user.name;
                this.editForm.email = user.email;

                $('#modal-edit-user').modal('show');
            },

            /**
             * Update the user being edited.
             */
            update() {
                this.persistCompany('put', '/api/users/' + this.editForm.id, this.editForm, '#modal-edit-user');
            },

            /**
             * Persist the user to storage using the given form.
             */
            persistCompany(method, uri, form, modal) {
                form.errors = [];

                axios[method](uri, form).then(response => {
                    form.name = '';
                    form.admin = '';
                    form.website = '';
                    form.errors = [];

                    $(modal).modal('hide');
                }).catch(error => {
                    if (typeof error.response.data === 'object') {
                        form.errors = _.flatten(_.toArray(error.response.data));
                    } else {
                        form.errors = ['Algo deu errado. Por favor, tente novamente.'];
                    }
                });
            },

            /**
             * Destroy the given user.
             */
            destroy(user, modal) {
                swal({
                    title: "Deseja remover este usuário?",
            	    text: "Esta operação será permanente e não poderá ser revertida!",
            	    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-info btn-fill",
                    confirmButtonText: "Sim, desejo remover!",
                    cancelButtonClass: "btn btn-danger btn-fill",
                    cancelButtonText: "Cancelar",
                    closeOnConfirm: true,
                },function(){
                    axios.delete('/api/users/' + user.id).then(response => {
                        $(modal).modal('hide');
                    });
                });
            }
        }
    }
</script>
