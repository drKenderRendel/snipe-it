@component('mail::message')
{{ trans('general.reminder_checked_out_items', array('reply_to_name' => config('mail.reply_to.name'), 'reply_to_address' => config('mail.reply_to.address'))) }}

@if ($assets->count() > 0)
## {{ $assets->count() }} {{ trans('general.assets') }}

@foreach ($assets as $asset)
<table class="inventory-card" role="presentation" width="100%" cellpadding="0" cellspacing="0">
<tr>
@if (($snipeSettings->show_images_in_email == '1') && $asset->getImageUrl())
<td width="88" valign="top"><img src="{{ asset($asset->getImageUrl()) }}" alt="" width="64" style="display:block; width:64px; height:auto; border:0;"></td>
@endif
<td valign="top">
<span class="inventory-name">{{ $asset->display_name }}</span><br>
<span class="inventory-meta">
{{ trans('mail.asset_tag') }}: {{ $asset->asset_tag }}<br>
{{ trans('admin/hardware/table.serial') }}: {{ $asset->serial }}<br>
{{ trans('general.category') }}: {{ $asset->model->category->name }}<br>
{{ trans('admin/hardware/table.location') }}: {{ ($asset->location) ? $asset->location->name : '' }}
</span>
</td>
</tr>
</table>
@endforeach
@endif

@if ($accessories->count() > 0)
## {{ $accessories->count() }} {{ trans('general.accessories') }}

@foreach ($accessories as $accessory)
<table class="inventory-card" role="presentation" width="100%" cellpadding="0" cellspacing="0">
<tr>
@if (($snipeSettings->show_images_in_email == '1') && $accessory->getImageUrl())
<td width="88" valign="top"><img src="{{ asset($accessory->getImageUrl()) }}" alt="" width="64" style="display:block; width:64px; height:auto; border:0;"></td>
@endif
<td valign="top"><span class="inventory-name">{{ $accessory->name }}</span></td>
</tr>
</table>
@endforeach
@endif

@if ($licenses->count() > 0)
## {{ $licenses->count() }} {{ trans('general.licenses') }}

@foreach ($licenses as $license)
<table class="inventory-card" role="presentation" width="100%" cellpadding="0" cellspacing="0">
<tr><td><span class="inventory-name">{{ $license->name }}</span></td></tr>
</table>
@endforeach
@endif

@if ($consumables->count() > 0)
## {{ $consumables->count() }} {{ trans('general.consumables') }}

@foreach ($consumables as $consumable)
<table class="inventory-card" role="presentation" width="100%" cellpadding="0" cellspacing="0">
<tr><td><span class="inventory-name">{{ $consumable->name }}</span></td></tr>
</table>
@endforeach
@endif
@endcomponent
