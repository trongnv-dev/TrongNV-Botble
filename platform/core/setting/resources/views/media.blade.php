@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    {!! $form->renderForm() !!}
@stop

@push('footer')
    <x-core::modal
        id="generate-thumbnails-modal"
        :title="trans('core/setting::setting.generate_thumbnails')"
        type="warning"
        :has-form="true"
        :form-action="route('settings.media.generate-thumbnails')"
        :data-total-files="0"
        :data-chunk-limit="RvMedia::getConfig('generate_thumbnails_chunk_limit')"
    >
        <p>{{ trans('core/setting::setting.generate_thumbnails_description') }}</p>

        <x-core::form.checkbox
            :label="trans('core/setting::setting.generate_thumbnails_override')"
            :helper_text="trans('core/setting::setting.generate_thumbnails_override_helper')"
            name="override_existing"
            :checked="false"
            id="override_existing"
        />

        <x-slot:footer>
            <button
                type="button"
                class="btn btn-warning"
                id="generate-thumbnails-button"
            >{{ trans('core/setting::setting.generate') }}</button>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-dismiss="modal"
            >{{ trans('core/base::base.close') }}</button>
        </x-slot:footer>
    </x-core::modal>
@endpush
