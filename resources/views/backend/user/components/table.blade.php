<h4 class="mt-4">{{ $tableHeading }}</h4>
<table class="table table-bordered mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col"><input type="checkbox" value="" id="checkAll" class="input-checkbox"></th>
            <th scope="col"><strong> Ảnh đại diện</strong></th>
            <th scope="col"><strong> Email</strong></th>
            <th scope="col"><strong>Số điện thoại</strong></th>
            <th scope="col"><strong> Địa chỉ</strong></th>
            <th scope="col"><strong> Tình trạng</strong></th>
            <th scope="col" class="text-center"><strong> Thao tác</strong></th>
        </tr>
    </thead>
    <tbody>
        @if (isset($users) && is_object($users))
            @foreach ($users as $user)
                <tr>
                    <th scope="row"><input type="checkbox" value="" id="checkAll"
                            class="input-checkbox checkBoxItem"></th>
                    <td>
                        <img src="{{$user->image}}"
                            alt="" width="50px" height="50px" style="border-radius: 50%">
                    </td>
                    <td>
                        <div class="user-item name"><strong> {{ $user->name }}</strong></div>
                    </td>
                    <td>
                        <div class="user-item email"><strong>{{ $user->email }}</strong> </div>
                    </td>
                    <td>
                        <div class="user-item phone"><strong>{{ $user->phone }}</strong> </div>
                    </td>
                    <td>
                        <div class=""><strong> {{ $user->address }}</strong></div>
                    </td>
                    <td class="text-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input p-2" type="checkbox" role="switch"
                                id="flexSwitchCheckChecked" checked>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $users->links() }}

