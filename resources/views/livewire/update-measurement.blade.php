<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Update Contact</h3>
    </div>

    <div class="panel-body">
        <div class="form-inline">
            <input type="hidden" wire:model="selected_id">
            <div class="input-group">
                Date
                <input wire:model="date" type="date" class="form-control input-sm">
            </div>
            <div class="input-group">
                Chest
                <input wire:model="chest" type="number" class="form-control input-sm">
            </div>
            <div class="input-group">
                Waist
                <input wire:model="waist" type="number" class="form-control input-sm">
            </div>
            <div class="input-group">
                Left Arm
                <input wire:model="left_arm" type="number" class="form-control input-sm">
            </div>
            <div class="input-group">
                Right Arm
                <input wire:model="right_arm" type="number" class="form-control input-sm">
            </div>
            <div class="input-group">
                <br>
                <button wire:click="update()" class="btn btn-default">Update</button>
            </div>
        </div>
    </div>

</div>