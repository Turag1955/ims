<div class="modal fade show" id="store_or_update_modal" tabindex="-1" role="dialog" aria-labelledby="model-1"
    style="display: block; padding-left: 17px;" aria-modal="true">
    <div class="modal-dialog" role="document">

        <!-- Modal Content -->
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title" id="model-1"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="form-group {{ $col ?? '' }}">
                <label for="{{ $name }}">{{ $label }}</label>
                <select data-search-live="true" data-search-live-placeholder="Search" name="{{ $name }}" id="{{ $name }}" class="form-control {{ $class ?? '' }}" @if (!empty($onchange)) onchange="{{ $onchange ?? '' }}" @endif>
                    <option value="">Select Please</option>
                    {{ $slot }}
                </select>
             
            </div>
            <!-- /modal header -->
            <form id="store_or_update" method="POST">
                @csrf
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="row">
                        <x-form.textbox label="menu name" type="text" name="menu_name" class="is-invalid" col="col-md-6" placeholder="Menu Name" />
                        <x-form.selectbox label="Deletable" name="deletable" class="is-invalid" col="col-md-6" >
                            @foreach (DELETABLE as $key => $value)
                               <option value="{{ $key }}">{{ $value }}</option> 
                            @endforeach
                        </x-form.selectbox>
                        
                    </div>
                </div>
                <!-- /modal body -->
            </form>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save changes</button>
            </div>
            <!-- /modal footer -->

        </div>
        <!-- /modal content -->

    </div>
</div>
