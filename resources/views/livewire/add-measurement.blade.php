<div class="card">
    <div class="card-body">
        <div class="col-md-6 my-2 d-flex flex-row justify-content-between align-items-center">
            <h3 class="m-0">Add Measurement</h3>
        </div>
        <div class="pd-30 pd-sm-40 bg-gray-200">
            <div class="row row-xs d-flex justify-content-start">
                <div class="col-md-12 my-2">
                    Date
                    <input wire:model="date" type="date" class="form-control input-sm">
                </div>
                <div class="col-md-6 my-2">
                    Chest
                    <input wire:model="chest" type="text" class="form-control input-sm">
                </div>
                <div class="col-md-6 my-2">
                    Waist
                    <input wire:model="waist" type="text" class="form-control input-sm">
                </div>
                <div class="col-md-6 my-2">
                    Left Arm
                    <input wire:model="left_arm" type="text" class="form-control input-sm">
                </div>
                <div class="col-md-6 my-2">
                    Right Arm
                    <input wire:model="right_arm" type="text" class="form-control input-sm">
                </div>
                <div class="col-md-3 mt-3">
                    <button class="btn btn-main-primary btn-block" wire:click="store()">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>