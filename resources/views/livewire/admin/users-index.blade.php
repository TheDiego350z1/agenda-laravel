<div>
    <div class="card-header">
        <input wire:model="search" class="form-control" type="text" placeholder="Buscar usuarios" /> 

    </div>
    @if($users->count())
        <div class="card">
            <div class="card-body">
                <table class="table table-stripe">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user->id)}} " class="btn btn-primary">Editar usuario</a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No registros</strong>
        </div>
    @endif
</div>
