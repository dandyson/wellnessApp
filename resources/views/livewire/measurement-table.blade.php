<div>
<!-- Include modal -->
@include('components/add-measurement')
	
<!-- Button trigger modal -->
<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-sm-t-0">
	<a class="modal-effect btn btn-outline-primary btn-block"
		data-bs-effect="effect-slide-in-right" data-bs-toggle="modal"
		data-bs-target="#add-measurement">Slide In Right
	</a>
</div>

<table id="example" class="table key-buttons text-md-nowrap dataTable no-footer dtr-inline"
    aria-describedby="example_info" style="width: 782px;">
    <thead>
        <tr>
            <th class="border-bottom-0 sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                style="width: 99px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID
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
        @foreach ($measurements as $measurement)
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">{{ $measurement->id }}</td>
                <td>{{ $measurement->date }}</td>
                <td>{{ $measurement->waist }}</td>
                <td>{{ $measurement->chest }}</td>
                <td>{{ $measurement->left_arm }}</td>
                <td>{{ $measurement->right_arm }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>