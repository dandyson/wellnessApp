<div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.update-measurement')
    @else
        @include('livewire.add-measurement')
    @endif

    <table id="example" class="table key-buttons text-md-nowrap dataTable no-footer dtr-inline"
        aria-describedby="example_info" style="width: 782px;">
        <thead>
            <tr>
                <th class="border-bottom-0 sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                    colspan="1" style="width: 99px;" aria-sort="ascending"
                    aria-label="Name: activate to sort column descending">ID
                </th>
                <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    style="width: 161px;" aria-label="Position: activate to sort column ascending">Date</th>
                <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    style="width: 67px;" aria-label="Office: activate to sort column ascending">Waist</th>
                <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    style="width: 29px;" aria-label="Age: activate to sort column ascending">Chest</th>
                <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    style="width: 82px;" aria-label="Start date: activate to sort column ascending">Left Arm</th>
                <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    style="width: 55px;" aria-label="Salary: activate to sort column ascending">Right Arm</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->date }}</td>
                    <td>{{ $row->chest }}</td>
                    <td>{{ $row->waist }}</td>
                    <td>{{ $row->left_arm }}</td>
                    <td>{{ $row->right_arm }}</td>
                    <td width="100">
                        <button wire:click="edit({{ $row->id }})" class="btn btn-xs btn-warning">Edit</button>
                        <button wire:click="destroy({{ $row->id }})" class="btn btn-xs btn-danger">Del</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
