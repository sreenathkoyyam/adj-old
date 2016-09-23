
//sreenath:thumb_brand category get

function multy_combos(owner_id,b_id)
{

        $.ajax({
        dataType : "json",
        type : "POST",
    
       
         data : {
          owner_id : owner_id,
           b_id : b_id,
        },

        // url : "services/adj_dash_master_business_category.php",
            url : 'services/adj_get_brand_category_name.php',

        success : function(response) {
             var total_count=response.total_count;
          
        if (response.status_value == 1) {
          $('#example-basic').empty();
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
             // alert(total_s)
              
              
             var txt;
            var check_val= response.data[i].check_val;
         
            
                
            if(check_val==1)
            {
               txt= "'"+"<option></option>"+"'";
            
            }
            else{
                  var category_id= response.data[i].category_id;
                txt= "'"+"<option  selected='selected'></option>"+"'";
                Search_Array(options,category_id);
            }
              //alert(txt);
            $('#example-basic').append(
                
            $(txt).val(response.data[i].category_id).html(response.data[i].b_category_name)
            
            );
            
             $('#b_category').append(
            $(txt).val(response.data[i].category_id).html(response.data[i].b_category_name));
            
           
            
        } 
        $("#example-basic").multiselect('refresh');
        }
        }
        });
}      
    
 function thumb_category_combos(owner_id,b_id)
{

   
        $.ajax({
        dataType : "json",
        type : "POST",
    
         data : {
          owner_id : owner_id,
           b_id : b_id,
        },
       // data : {practice_id:practice_id,location_id:location_id},

        url : "services/adj_get_brand_category_name.php",

     
        
          success : function(response) {
             var total_count=response.total_count;
          $('#tmb_malti').empty();
        if (response.status_value == 1) {
          
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
             // alert(total_s)
              
              
             var txt;
            var check_val= response.data[i].check_val;
         
            
                
            if(check_val==1)
            {
               txt= "'"+"<option></option>"+"'";
            
            }
            else{
                  var category_id= response.data[i].category_id;
                txt= "'"+"<option  selected='selected'></option>"+"'";
                Search_Array(options,category_id);
            }
              //alert(txt);
           
            
             $('#tmb_malti').append(
            $(txt).val(response.data[i].category_id).html(response.data[i].b_category_name));
            
           
            
        } 
        $("#tmb_malti").multiselect('refresh');
        }
        }
        });
}      
 
 
  function image_category_combos(owner_id,b_id)
{
    

    $.ajax({
        dataType : "json",
        type : "POST",
    
         data : {
          owner_id : owner_id,
           b_id : b_id,
        },
       // data : {practice_id:practice_id,location_id:location_id},

        url : "services/adj_get_brand_category_name.php",

     
        
          success : function(response) {
               //alert(123)
             var total_count=response.total_count;
          
        if (response.status_value == 1) {
            
          $('#img_malti').empty();
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
             // alert(total_s)
              
              
             var txt;
            var check_val= response.data[i].check_val;
        
            
                
            if(check_val==1)
            {
                 //alert(check_val)
               txt= "'"+"<option></option>"+"'";
               
            
            }
            else{
                  var category_id= response.data[i].category_id;
                txt= "'"+"<option  selected='selected'></option>"+"'";
                Search_Array(options,category_id);
            }
             
                  $('#img_malti').append(
            $(txt).val(response.data[i].category_id).html(response.data[i].b_category_name));
            
                         } 
        $("#img_malti").multiselect('refresh');
        }
        }
        });
}      
            
   