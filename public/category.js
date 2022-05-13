var parents=[];
var index=0;
$.ajax({
    url:"/load_main_categories",
    method:"get",
    success: function(result){
      if(result.result==true){  
      var main_cat='<select class="form-control" onchange="loadSub(this,0)"><option> Select Category </option>';    
        $.each(result.rows,function(x,y){
            main_cat+='<option value="'+y.id+'">'+y.name+'</option>';
        });
        $(".row").append("<div index='"+index+"' class='category form-group col-sm-12  row_0 '><label class='label'>Select Category : </label>"+ main_cat +"</div> ");
    }else{}

    }
});

function loadSub(th,parent){
   var selected_category=$(th).val();
       
         
        $.ajax({
            url:"/load_sub_categories",
            method:"get",
            data:{
                "parent_id":selected_category
            },
            success: function(result){
               selected_index=$(th).parents(".category").attr("index");  
                    $(".category").each(function(){
                        if($(this).attr("index") > selected_index){
                            $(this).remove();
                        }
                    });  
              if(result.result==true){     
                   
                    index++; 
                    var options="<option> Select Category </option>";  
                        var main_cat='<select class="form-control " onchange="loadSub(this,'+selected_category+')">';    
                        $.each(result.rows,function(x,y){
                            options+='<option value="'+y.id+'">'+y.name+'</option>';
                        });
                    
                        main_cat+=options;
                        $(".row").append("<div  index='"+index+"'  class='category form-group col-sm-12  parent_"+parent+" row_"+parent+"'><label class='label'>Select Sub Category : </label>"+ main_cat +"</div> ");
                
                }else{}
        
            }
        });
    
  
}