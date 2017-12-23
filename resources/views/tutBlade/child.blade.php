@extends('tutBlade.parent')

@section('title','child')


@section('header')
	<p>Phương Anh xinh đẹp</p>

	<?php 
		$hoten = "<b>Phuong Anh</b>";
	?>
	{{-- để hiện biến ra màn hình, c1 --}}
	<?php echo $hoten; ?>
	{{-- c2 --}}
	{{$hoten}}

	{{-- cách 3 thay cho echo hay hơn vi fkhi chèn thẻ vào biến thì lúc gọi ra sẽ thay đổi còn nếu dùng {{}} thi hiện cả cú pháp--}}
	{!!$hoten!!}

@stop

