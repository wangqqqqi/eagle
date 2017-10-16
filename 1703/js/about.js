window.onload=function(){
	let t=setInterval(fn,3000)
	let num=0
	function fn(){
		num++;
		if(num==4){
			num=0;
		}
		$('.banner-main>li').css({opacity:0,transition:'opacity 0.6s'});
		$('.btns>li').css({background:'none'});
		$('.btns>li').eq(num).css({background:'#fff'});
		$('.banner-main>li').eq(num).css({opacity:1,transition:'opacity 0.6s'});
	}
	$(".banner").mouseenter(function(){
		clearInterval(t);
	}).mouseleave(function(){
		t=setInterval(fn,3000)
	})
	$('.btns>li').mouseenter(function(){
			num=$(this).index()-1;
			fn();
		})
}
