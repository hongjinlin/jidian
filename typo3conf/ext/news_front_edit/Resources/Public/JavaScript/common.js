(function($){
    $(function(){
	
		if ( $("#news_feront_edit_bodytext").length > 0 ) { 
			UE.getEditor("news_feront_edit_bodytext");
		}

        if(!isMobile()){
            $(".select2").select2({
                placeholder: "请选择",
                allowClear: true
            });
        }
		
		
		$('.btn-del').click(function(){
			if(confirm('确认删除')) return true;
			return false;
		});
		
		//全选&取消全选
		$('input[type="checkbox"].selectall').bind('click', function() { 
			$(this).closest('table').find('.sel').prop("checked", this.checked);
		}); 
		
		//删除选中
		$('.btn-delete-all').bind('click',function(){
			var items='';
			$('input[type="checkbox"].sel').each(function(){
				if($(this).prop("checked")){
					items += $(this).val()+',';
				}
			});
			
			if(items == ''){
				alert('没有选中任何项目，不能批量操作');
			}else{
				$('#multidelete-items').val(items);
				//alert($('#multidelete-items').val()   );
				return true;
			}
			return false;
		});
		
		
		$("#news_edit_validation").validate({
			errorElement: "span", 
			rules: {
				'tx_newsfrontedit_news[news][title]': {
					required: true
				},
				'tx_newsfrontedit_news[news][bodytext]': {
					required: true
				},
				'tx_newsfrontedit_news[news][datetime]': {
					required: true
				},
				'tx_newsfrontedit_news[news][categories][]': {
					required: true
				},
				'tx_newsfrontedit_news[news][author]': {
					required: true
				}
			},
			messages: {
				'tx_newsfrontedit_news[news][title]': {
					required: "新闻标题必须填写!"
				},
				'tx_newsfrontedit_news[news][bodytext]': {
					required: "新闻内容必须填写!"
				},
				'tx_newsfrontedit_news[news][datetime]': {
					required: "发布时间必须填写!"
				},
				'tx_newsfrontedit_news[news][categories][]': {
					required: "分类必须填写!"
				},
				'tx_newsfrontedit_news[news][author]': {
					required: "作者必须填写!"
				}
			}   
        });
    });
})(jQuery);


function isMobile() {
    return /(iPhone|iPad|iPod|iOS|android|MicroMessenger)/i.test(navigator.userAgent);
}