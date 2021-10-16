<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://www.sodatekatalab.jp/db_img/sozai/184/f8d77916f416e2160eefc4380dea05d4.jpg" class="logo" >
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
