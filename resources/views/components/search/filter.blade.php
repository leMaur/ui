<form id="{{ $id }}" action="{{ $action }}" method="{{ $method }}" {{ $attributes }}>
    <fieldset>
        <legend>
            <h2 @if($titleClass){{ $titleClass }}@endif>
                <button type="button" id="{{ $mainTriggerId() }}" dusk="{{ $triggerDusk() }}" @if($triggerClass){{ $triggerClass }}@endif>{{ $title }}</button>
                <button type="submit" dusk="{{ $submitDusk() }}" @if($submitClass){{ $submitClass }}@endif>{{ $button }}</button>
            </h2>
        </legend>
        @foreach($filters as $filter)
            <fieldset>
                <legend>
                    <h3 @if($filterWrapperClass)class="{{ $filterWrapperClass }}"@endif>
                        <button type="button"  id="{{ $filterTriggerId(data_get($filter, 'name'))  }}" dusk="{{ $filterDusk(data_get($filter, 'name')) }}"
                                @if($filterClass)class="{{ $filterClass }}"@endif>{{ data_get($filter, 'name') }}</button>
                    </h3>
                </legend>
                @foreach(data_get($filter, 'items', []) as $item)
                    <div @if($itemWrapperClass)class="{{ $itemWrapperClass }}"@endif>
                        <input type="checkbox" id="{{ Str::slug(data_get($filter, 'name')).'-'.data_get($item, 'slug') }}" name="{{ data_get($item, 'slug') }}" dusk="{{ $itemDusk([data_get($filter, 'name'), data_get($item, 'slug')]) }}" @if($itemClass)class="{{ $itemClass }}"@endif>
                        <label for="{{ Str::slug(data_get($filter, 'name')).'-'.data_get($item, 'slug') }}" dusk="{{ $labelDusk([data_get($filter, 'name'), data_get($item, 'slug')]) }}" @if($labelClass)class="{{ $labelClass }}"@endif>{{ data_get($item, 'name') }}</label>
                    </div>
                @endforeach
            </fieldset>
        @endforeach
    </fieldset>
</form>
