 //Eros:category get

  function business_category_get()
 {
   // // alert(123)
        // // var id="null";
   $.ajax({
        
        dataType : "json",
      type : "POST",
        data :"",
           url : 'services/adj_dash_master_business_category.php',

        success : function(response) {
             var total_count=response.total_count;
            
        if (response.status_value == 1) {
         // alert(total_count)
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
            $('#b_category').append(
            $('<option></option>').val(response.data[i].id).html(response.data[i].b_category_name));
                   
        } 
        }
        }
      });
 }

//Eros:state get
  function master_state_get()
{
   //alert(123)
        // var id=95;
    $.ajax({
        dataType : "json",
        type : "POST",
         data : {
          country_id :$('#country').val()
        },
        
           url : 'services/adj_dash_master_state.php',

        success : function(response) {
             var total_count=response.total_count;
            
        if (response.status_value == 1) {
         // alert(total_count)
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
            $('#state').append(
            $('<option></option>').val(response.data[i].state_id).html(response.data[i].state_name));
                   
        } 
        }
         if (response.status_value == 0) {
            //alert(123);
         $('#state').empty();
          $('#state').append(
            $('<option></option>').val(0).html('Select a State'));
                   
        } 
 
        }
        });
}
//Eros:country get

  function master_country_get()
{
   // alert(123)
        // var id="null";
    $.ajax({
        dataType : "json",
        type : "POST",
        data :"",
           url : 'services/adj_dash_master_country.php',

        success : function(response) {
             var total_count=response.total_count;
            
        if (response.status_value == 1) {
         // alert(total_count)
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
            $('#country').append(
            $('<option></option>').val(response.data[i].country_id).html(response.data[i].country_name));
                   
        } 
        }
        }
        });
}
//get site owners

  function master_site_owner_get()
{
   // alert(123)
        // var id="null";
    $.ajax({
        dataType : "json",
        type : "POST",
        data :"",
           url : 'services/adj_get_master_site_owners.php',

        success : function(response) {
             var total_count=response.total_count;
          
        if (response.status_value == 1) {
              master_product_type_get();
         // alert(total_count)
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
            $('#site_owners').append(
            $('<option></option>').val(response.data[i].site_owner_id).html(response.data[i].name));
            
              $('#site_image_owners').append(
            $('<option></option>').val(response.data[i].site_owner_id).html(response.data[i].name));
                    
        } 
        }
        }
        });
}

//Eros:get product type

  function master_product_type_get()
{
   // alert(123)
        // var id="null";
    $.ajax({
        dataType : "json",
        type : "POST",
        data :"",
           url : 'services/adj_get_product_type.php',

        success : function(response) {
             var total_count=response.total_count;
            
        if (response.status_value == 1) {
         // alert(total_count)
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
            $('#product_type').append(
            $('<option></option>').val(response.data[i].product_type_id).html(response.data[i].product_type));
                   
        } 
        }
        }
        }).done(function(data) {
		 master_image_dimension();
	})

}
  function master_image_dimension()
{
    $.ajax({
        dataType : "json",
        type : "POST",
        data :"",
           url : 'services/adj_master_image_dimension.php',

        success : function(response) {
             var total_count=response.total_count;
            
        if (response.status_value == 1) {
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
            $('#tmb_dimention_id').append(
            $('<option></option>').val(response.data[i].dimension_id).html(response.data[i].dimension));
                   
        } 
        }
        }
        });
}

//Eros:maiking comma separate string for maltiple category
  var options=[];
  var i=0;
        function Search_Array(options, coma){
        var Found = false;
        for (var i = 0; i < options.length; i++){
        if (options[i] == coma){
        options.splice(i,1);
        
        var Found = true;
       }
       }
       if(Found==false)
       {
        options.push(coma);
       }
       //alert(coma)
       //alert(options)
    
       }
//Eros:maiking comma separate string for maltiple category
 
    function coma_maik (coma) {
    
     Search_Array(options,coma);
         
    }
    

//thumbnail upload
//thumbnail upload
function ajaxFileUpload() {
	var new_brand_name_val=$('#new_brand_names').val();
	var site_owners=document.getElementById('site_owners');
	var product_type=document.getElementById('product_type');
	var b_name= document.getElementById('b_name');
	var new_brand_names= document.getElementById('new_brand_names');
	var tmb_dimention_id =document.getElementById('tmb_dimention_id');
	var tmb_name=document.getElementById('tmb_name');
	var catgry_id=0;
	var mandatory=0;
	 if(site_owners.value == 0) {
     	site_owners.style.borderColor = '#ffa853';
     	site_owners.style.color = '#ffa853';
        mandatory = 1;
    }
    if(product_type.value == 0) {
     	product_type.style.borderColor = '#ffa853';
     	product_type.style.color = '#ffa853';
        mandatory = 1;
    }
	if($('#b_new_creation').is(":checked")){
		 if(new_brand_names.value == "") {
     		new_brand_names.style.borderColor = '#ffa853';
     		new_brand_names.style.color = '#ffa853';
        	mandatory = 1;
    	}
		chk_val=1;
	}
	else{
		if(b_name.value == 0) {
     	b_name.style.borderColor = '#ffa853';
     	b_name.style.color = '#ffa853';
        mandatory = 1;
   		}
		chk_val=0;
	}
	
	var catgry_id= options.join(",");
	//alert(catgry_id)
	if(catgry_id.length==0){
		 mandatory = 1;
		 $('#remark_cat').show();
	}else{ $('#remark_cat').hide();}
	if(tmb_dimention_id.value == 0) {
     	tmb_dimention_id.style.borderColor = '#ffa853';
     	tmb_dimention_id.style.color = '#ffa853';
        mandatory = 1;
    }
	if(tmb_name.value == "") {
     		tmb_name.style.borderColor = '#ffa853';
     		tmb_name.style.color = '#ffa853';
        	mandatory = 1;
    	}
    if (document.getElementById('fileToUpload').value=="") {
			mandatory = 1;
			$('#remark_thump').show();
	}else{ $('#remark_thump').hide();}
	if(mandatory==0){
			$('#mandatory').hide();
	$.ajaxFileUpload({
			url : 'services/thumb_upload.php',
			secureuri : false,
			fileElementId : 'fileToUpload',
			dataType : 'json',
			data : {
				user_id:admin_id,
        		site_owners_id :$('#site_owners').val(),
        		brand_ids :$('#b_name').val(),
        		new_brand_name_val :"'" +new_brand_name_val+"'",
        		catgry_ids:"'" +catgry_id+"'" ,
        		tmb_name :"'" +$('#tmb_name').val()+"'" ,
        		tmb_dimention_id :$('#tmb_dimention_id').val(),
        		chk_value:chk_val,
            	product_type :$('#product_type').val(),
            
          },
			success : function(response, status) {
				jAlert(response.data[0].status_text,'Message',function(){
						});
						
			},
			error : function(response, status, e) {
				jAlert('Photo uploading failed','Message',function(){
	              			//alert(2);
						});
			}
		})
		return false;
    }
    else{
    	$('#mandatory').show();
    }   
}
//Eros:chainged
function site_owners_chk() {
	
    var site_owners = document.getElementById("site_owners");
    if(site_owners.value == 0) {
        site_owners.style.borderColor = '#ff0000';
        site_owners.style.color = "#ff0000";
    } else {
        site_owners.style.borderColor = '';
        site_owners.style.color = "#000000";
    }
    get_brand_name(site_owners.value);
}
function product_type_chk(){
	var product_type = document.getElementById("product_type");
    if(product_type.value == 0) {
        product_type.style.borderColor = '#ff0000';
        product_type.style.color = "#ff0000";
    } else {
        product_type.style.borderColor = '';
        product_type.style.color = "#000000";
    }
}
function new_brand_names_chk(){
	var new_brand_names = document.getElementById("new_brand_names");
    if(new_brand_names.value == "") {
        new_brand_names.style.borderColor = '#ff0000';
        new_brand_names.style.color = "#ff0000";
    } else {
        new_brand_names.style.borderColor = '';
        new_brand_names.style.color = "#000000";
    }
    //thumb_category_name_get()
}
function b_name_chk(){
	var b_name = document.getElementById("b_name");
    if(b_name.value == "") {
        b_name.style.borderColor = '#ff0000';
        b_name.style.color = "#ff0000";
    } else {
        b_name.style.borderColor = '';
        b_name.style.color = "#000000";
    }
    thumb_category_name_get($("#site_owners").val(),b_name.value)
}
function tmb_name_chk(){
	var tmb_name= document.getElementById("tmb_name");
    if(tmb_name.value == "") {
        tmb_name.style.borderColor = '#ff0000';
        tmb_name.style.color = "#ff0000";
    } else {
        tmb_name.style.borderColor = '';
        tmb_name.style.color = "#000000";
    }
}
function tmb_dimention_id_chk(){
	var tmb_dimention_id = document.getElementById("tmb_dimention_id");
    if(tmb_dimention_id.value == 0) {
        tmb_dimention_id.style.borderColor = '#ff0000';
        tmb_dimention_id.style.color = "#ff0000";
    } else {
        tmb_dimention_id.style.borderColor = '';
        tmb_dimention_id.style.color = "#000000";
    }
}
function change_image(){
		if (document.getElementById('fileToUpload').value=="") {
			$('#remark_thump').show();
		}else{
			$('#remark_thump').hide();
		}
	}

//Eros:site_owners registration
function site_owner_register() {
 //alert(1)
 var catgry_id= options.join(",");
  //alert(1)
 //catgry_id='1,2,3'
 var axes=1;
 var Errror_msg='';
 if(catgry_id=='')
 {
        
     axes=0;
    // Errror_msg="Please Select One Category"
 }
 else
 {
     //  alert(123);
       var owner_id;
       var b_name;
       
       //brand validation for edit
    if( $('#owner_id').val()==''||$('#owner_id').val()==null||$('#owner_id').val()==0)
     {
        // alert(231)
     
          owner_id=0; 
          if($('#brand_name').val()=='')
     {
       axes=0;  
       // Errror_msg="Please Enter Brand Name"
     }
     else
     {
        b_name= $('#brand_name').val();
         axes=1;
     }
     }
     else{
         owner_id= $('#owner_id').val();
         
         if($('#brand_name_edit').val()=='')
     {
       axes=0;  
       // Errror_msg="Please Enter Brand Name"
     }
              
         b_name='null'
     }
     
  
    //alert(axes);
     
          if($('#f_name').val()=='')
     {
       axes=0;  
        Errror_msg="Please Enter First Name"
        // alert(axes);
     }
      else if($('#l_name').val()=='')
     {
         
       axes=0; 
       // $('#l_name').val()=null; 
        Errror_msg="Please Enter Last Name"
     }
    
      else if($('#c_name').val()=='')
     {
       axes=0;  
        Errror_msg="Please Enter Company Name"
          
     }
      else if($('#web').val()=='')
     {
       axes=0;  
        Errror_msg="Please Enter Website Name"
     }
       else if($('#address1').val()=='')
     {
       axes=0;  
       Errror_msg="Please Enter Address"
     }
        else if($('#house_name').val()=='')
     {
       axes=0;  
       Errror_msg="Please Enter Home Name"
     }
       else if($('#country').val()=='')
     {
       axes=0;  
       Errror_msg="Please Select Country"
     }
       else if($('#state').val()=='')
     {
       axes=0;  
        Errror_msg="Please Select State"
     }
       else if($('#city').val()=='')
     {
       axes=0;  
        Errror_msg="Please Select city"
     }
       else if($('#email').val()=='')
     {
       axes=0;  
       Errror_msg="Please Enter Email"
     }
        else if($('#phone').val()=='')
     {
       axes=0;  
        Errror_msg="Please Enter Phone No"
     }
   
     
 }

 if(axes==1)
 {
    // alert(owner_id);
     
   
        $.ajax({
        dataType : "json",
        type : "POST",
        data : {
            f_name : "'"+$('#f_name').val()+"'",
            l_name : "'"+$('#l_name').val()+"'",
            c_name : "'"+$('#c_name').val()+"'",
            b_category : "'"+catgry_id+"'",
            web : "'"+$('#web').val()+"'",
            brand_name : "'"+b_name+"'",
            address1 : "'"+$('#address1').val()+"'",
            house_name : "'"+$('#house_name').val()+"'",
            country : "'"+$('#country').val()+"'",
            state : "'"+$('#state').val()+"'",
            city : "'"+$('#city').val()+"'",
            email : "'"+$('#email').val()+"'",
            phone : "'"+$('#phone').val()+"'",
             reg_status : "'"+1+"'",
            owner_id : "'"+owner_id+"'"
        },
       url : 'services/adj_site_owner_registeration.php',

        success : function(response) {
            var id = response.status_value;
           // alert(99)
            // alert(id);
             
             if(id==0)
             {
          
                 var text="Category Insertion Have Some Problem"
                jAlert(text, 'Message'); 
                window.location.assign("dashboard.php")
               
             }
             else
             {
             	//alert(43);
                 var owner_id=response.data[0].owner_id;
                  var b_id=response.data[0].b_id;
                   var c_ids=response.data[0].c_id;
                if(b_id==0)
                {
                  b_id=$('#brand_name_edit').val();
                  }
                   var x=c_ids.slice(0,-1)
                    // alert(x);
				 c_ids = x.slice( 1 );
				 
                  //alert(c_ids);
                 $.ajax({
        dataType : "json",
        type : "POST",
        data : {
            owner_id : "'"+owner_id+"'",
            b_id : "'"+b_id+"'",
            c_id : "'"+c_ids+"'",
           
        },
       url : 'services/adj_insert_thumb_brand_category .php',
       
       success : function(response) {
        
        var c_id = response.data[0].ctg_status_value;
        if(c_id==1)
        {
            
             var text="Site Owner Data Inserted Succesfully"
               // jAlert(text, 'Message'); 
                
                jAlert(text, 'Message', function(r) {   
               
                 window.location.assign("dashboard.php")                 
                }); 
              
        }
        else
        {
             var text="Category Insertion Have Some Problem";
                jAlert(text, 'Message'); 
                window.location.assign("dashboard.php")
        }
           // alert(99)
            // alert(id);
       }
       });
             }
             //window.location.assign("dashboard.php")
        }
    });
}
else{
   
    $('#error').show();
}
}


//Eros:get brand_name

  function get_brand_name(owner_id)
{
   // alert(123)
        // var id="null";
        //var owner_id=0;
    $.ajax({
        dataType : "json",
        type : "POST",
         data :{
            owner_id : "" + owner_id + "",
        },
           url : 'services/adj_get_brand_name.php',

        success : function(response) {
             var total_count=response.total_count;
             
        if (response.status_value == 1) {
        	$('#b_name').empty();
         // alert(total_count)
        var rec_s= new Array();
         $('#b_name').append(
            $('<option></option>').val(0).html('Select One Brand'));
             
        for(var i=0; i<total_count; i++)
        {
            $('#b_name').append(
            $('<option></option>').val(response.data[i].brand_id).html(response.data[i].brand_name));
                   
        } 
        }
        }
        });
}

//shine
function site_owner()
{
   var customer_name;
		if ($("#customer_name").val()=='') 
				{
					customer_name=""+null+"";
				}
				else{
					customer_name="'"+$("#customer_name").val()+"'";
				}
				//alert(customer_name);
 			$("#site_owners").flexigrid({
 				
			 		type : "POST",
			 		dataType : "json",
					colModel : [
						{display: 'Site Owner Name', name : 'name',index:'name', width : 135, sortable : true, align: 'center'},
						{display: 'Company', name :'company_name',index:'company_name', width : 135, sortable : true, align: 'center'},
						{display: 'Edit/View', name : 'option',index:'option', width : 135, sortable : true, align: 'center'}
					],
					sortname: "Site Owners Details",
					sortorder: "asc",
					usepager: true,
					title: 'Customer Details',
					useRp: true,
					rp: 15,
					multiSelect: true,
		    		showTableToggleBtn: false,
					width: 700,
					resizable:false,
					height: 260,
					preProcess: insertLink,
			});
 		 	jQuery('#site_owners').flexOptions({
				url :  "services/adj_get_site_owners.php",
				params : [{
						name : 'customer_name',
						value : customer_name,
				
						}]
			}).flexReload();
}

function insertLink(data)
			{
				for( i = 0; i < data.rows.length; i++) 
				{
					    data.rows[i].cell['option'] = "<a class='bold' style='color:green;cursor:pointer' onclick = site_owners_edit(" + data.rows[i].id + ")>Edit</a>";
					
		        }
				return data;
		}
//site owner Edit/View function
 function site_owners_edit(id)  {
      $('#brand_name_tr').hide();
       $('#brand_name_edit_tr').show();
    // jQuery('#jquery-ajax-loader-example').ajaxLoader();
    $.ajax({
        dataType : "json",
        type : "POST",
        data :{
            customer_id : "" + id + "",
        },
           url : 'services/adj_get_site_owner_deatails.php',

        success : function(response) {
            // alert(23);
            
             var total_count=response.total_count;
            var owner_id=response.data[0]['owner_id'];
            //alert(owner_id);
        if (response.status_value == 1) {
                $('#new_cust').trigger('click');
                $('#owner_id').val(response.data[0]['owner_id']); 
                $('#f_name').val(response.data[0]['first_name']);   
                $('#l_name').val(response.data[0]['last_name']);       
                $('#c_name').val(response.data[0]['company_name']); 
                $('#b_category').val(response.data[0]['category_id']);   
                $('#web').val(response.data[0]['website']);   
                $('#brand_name').val(response.data[0]['brand_name']);       
                $('#address1').val(response.data[0]['address1']);  
                $('#house_name').val(response.data[0]['address2']);  
                $('#brand_name').val(response.data[0]['brand_name']);       
                $('#country').val(response.data[0]['country_id']);  
                master_state_for_customer_details(response.data[0]['country_id'],response.data[0]['state_id']);
               $('#city').val(response.data[0]['city']);  
                $('#email').val(response.data[0]['email']); 
                $('#phone').val(response.data[0]['phone']); 
        }
        
      
            
        $.ajax({
        dataType : "json",
        type : "POST",
       data :{
            owner_id : "'" + owner_id + "'",
        },
           url : 'services/adj_get_brand_name.php',

        success : function(response) {
             var total_count=response.total_count;
            
        if (response.status_value == 1) {
         // alert(total_count)
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
            $('#brand_name_edit').append(
            $('<option></option>').val(response.data[i].brand_id).html(response.data[i].brand_name));
                   
    // Search_Array(options,coma);
                          
                   
        } 
        }
        }
        });
        }
        });
  }     
function master_state_for_customer_details(country_id,state_id)
{
    // var country_id=country_id;
    $.ajax({
        dataType : "json",
        type : "POST",
         data : {
          country_id : country_id
        },
           url : 'services/adj_dash_master_state.php',
	        success : function(response) {
	             var total_count=response.total_count;
		        if (response.status_value == 1) {
		        var rec_s= new Array();
			        for(var i=0; i<total_count; i++)
			        {
			            $('#state').append(
			            $('<option></option>').val(response.data[i].state_id).html(response.data[i].state_name));
			                   
			        } 
		        }
	        }
        }).done(function(data) {
		    		  $('#state').val(state_id);
		    	});
}
function changePassword(user_id){
	var oldPswd=document.getElementById("old_pswd");
	var newPswd=document.getElementById("new_pswd");
	var cnfmPswd=document.getElementById("cnfm_pswd");
	var validate=1;
	if(oldPswd.value==''){
			oldPswd.style.borderColor = '#ff0000';
			oldPswd.style.color = "#ff0000";
			if(validate!=0)
			{
				validate=0;
			}
		 }
	if(newPswd.value==''){
			newPswd.style.borderColor = '#ff0000';
			newPswd.style.color = "#ff0000";
			if(validate!=0)
			{
				validate=0;
			}
		 }
	if(cnfmPswd.value==''){
			cnfmPswd.style.borderColor = '#ff0000';
			cnfmPswd.style.color = "#ff0000";
			if(validate!=0)
			{
				validate=0;
			}
		 }
	if(cnfmPswd.value!=newPswd.value){
			cnfmPswd.style.borderColor = '#ff0000';
			cnfmPswd.style.color = "#ff0000";
			newPswd.style.borderColor = '#ff0000';
			newPswd.style.color = "#ff0000";
			if(validate!=0)
			{
				validate=0;
			}
		 } 	 
	if(validate==1){
	 $.ajax({
        dataType : "json",
        type : "POST",
         data : {
          user_id : "" + user_id + "",oldpassword : "'" + oldPswd.value + "'",passwor_val : "'" + newPswd.value + "'",
        },
           url : 'services/adj_admin_change_password.php',
	        success : function(response) {
	            jAlert(response.data[0].status_text, 'Message', function()
                     {
                         if(response.data[0].status_value==1){
                         	window.location='dashboard.php';
                         }
                     });
	        }
        });
       }
}
function password_chk(){
    var txtPassword = document.getElementById("new_pswd");
    if(txtPassword.value == "") {
        txtPassword.style.borderColor = '#ff0000';
        txtPassword.style.color = "#ff0000";
    }
    else {
        txtPassword.style.borderColor = '';
        txtPassword.style.color = "#000000";
    }
}
function oldPassword_chk(){
    var txtPassword = document.getElementById("old_pswd");
    if(txtPassword.value == "") {
        txtPassword.style.borderColor = '#ff0000';
        txtPassword.style.color = "#ff0000";
    }
    else {
        txtPassword.style.borderColor = '';
        txtPassword.style.color = "#000000";
    }
}

function txtPasswordConfirm_chk(){
    var txtPassword = document.getElementById("new_pswd").value;
    var txtPasswordConfirm = document.getElementById("cnfm_pswd");
    if(txtPassword != txtPasswordConfirm.value) {
        txtPasswordConfirm.style.borderColor = '#ff0000';
        txtPasswordConfirm.style.color = "#ff0000";
    } else {
        txtPasswordConfirm.style.borderColor = '';
        txtPasswordConfirm.style.color = "#000000";
    }
}


//Eros:malti file upload checking
function uploads() {
   
       var cats=$('#img_malti').val();
      
     var text;
     var mandatory=0;
    
	if(cats.length==0){
		 mandatory = 1;
		 text='Please select a category';
           mandatory=1;
	}else{ 
		 $('#multiVal').val(cats);;
		}
    
     // if( $('#img_malti').val()==''||$('#img_malti').val()==null)
     // {
           // text='Please select a category';
           // mandatory=1;
     // }
     if (document.getElementById('upl').value=="") {
           $('#remark_thump').show();
	}
	else{
		$('#remark_thump').hide();
	}
     if( $('#site_image_owners').val()==0)
     {
     	document.getElementById("site_image_owners").style.borderColor = '#ff0000';
        document.getElementById("site_image_owners").style.color = "#ff0000";
        text="Please fill all the mandatory Fields";
            mandatory=1;
     }
      if( $('#b_name').val()==0)
     {
     	document.getElementById("b_name").style.borderColor = '#ff0000';
        document.getElementById("b_name").style.color = "#ff0000";
        text="Please fill all the mandatory Fields";
         mandatory=1;  
     }
     if( $('#tmb_dimention_id').val()==0)
     {
     	document.getElementById("tmb_dimention_id").style.borderColor = '#ff0000';
        document.getElementById("tmb_dimention_id").style.color = "#ff0000";
        text="Please fill all the mandatory Fields";
          mandatory=1;
     }
     if( $('#social_sites').val()==0)
     {
     	document.getElementById("social_sites").style.borderColor = '#ff0000';
        document.getElementById("social_sites").style.color = "#ff0000";
        text="Please fill all the mandatory Fields";
        mandatory=1;
     }
     if(mandatory==1){
     	jAlert(text, 'Message');
            return false; 
     }
     else{
     	return true;
     }
}
function site_image_owners_chk(ids) {
	
    var site_owners = document.getElementById("site_image_owners");
    if(site_owners.value == 0) {
        site_owners.style.borderColor = '#ff0000';
        site_owners.style.color = "#ff0000";
    } else {
    	get_brand_name(ids);
        site_owners.style.borderColor = '';
        site_owners.style.color = "#000000";
    }
    get_brand_name(site_owners.value);
}
function social_sites_chk(){
	var social_sites = document.getElementById("social_sites");
    if(social_sites.value == 0){
        social_sites.style.borderColor = '#ff0000';
        social_sites.style.color = "#ff0000";
    } else {
        social_sites.style.borderColor = '';
        social_sites.style.color = "#000000";
    }
}
function adj_master_social_sites(){
	 $.ajax({
      dataType : "json",
      type : "POST",
        data :"",
           url : 'services/adj_master_social_sites.php',
        success : function(response) {
			var total_count=response.total_count;
	        if (response.status_value == 1) {
		        var rec_s= new Array();
		        for(var i=0; i<total_count; i++)
		        {
		            $('#social_sites').append(
		            $('<option></option>').val(response.data[i].social_site_id).html(response.data[i].social_site));
		                   
		        } 
	        }
        }
      });
}
function image_chk(){
	if (document.getElementById('upl').value==""){
           $('#remark_thump').show();
	}
	else{
		$('#remark_thump').hide();
	}
}

// Eros:function for thumb gallery site owner get
 function thumb_gallery_site_owner_get()
{
   // alert(123)
        // var id="null";
    $.ajax({
        dataType : "json",
        type : "POST",
        data :"",
           url : 'services/adj_get_master_site_owners.php',

        success : function(response) {
             var total_count=response.total_count;
          
        if (response.status_value == 1) {
           
         // alert(total_count)
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
            $('#site_owners').append(
            $('<option></option>').val(response.data[i].site_owner_id).html(response.data[i].name));
            
                 
        } 
        }
        }
        });
}

//Eros:thumb gallery category get

function thumb_category_name_get()
{

   
        $.ajax({
        dataType : "json",
        type : "POST",
    
       
       // data : {practice_id:practice_id,location_id:location_id},

        url : "services/adj_dash_master_business_category.php",

        success : function(response) {
             var total_count=response.total_count;
            
        if (response.status_value == 1) {
         
        var rec_s= new Array();
        for(var i=0; i<total_count; i++)
        {
             // alert(total_s)
           
             $('#tmb_malti_glry').append(
            $('<option></option>').val(response.data[i].id).html(response.data[i].b_category_name));
            
                
            
        } 
       
        }
        }
        });
}      
 
// shine master category
function masterCat(){
{
 		$("#masterCat").flexigrid({
			 		type : "POST",
			 		dataType : "json",
					colModel : [
						{display: 'Category', name : 'category',index:'name', width : 135, sortable : true, align: 'center'},
						{display: 'Activate/Deactivate', name :'option',index:'company_name', width : 135, sortable : true, align: 'center'},
						{display: 'Edit', name : 'optionEdit',index:'option', width : 135, sortable : true, align: 'center'}
					],
					sortname: "category",
					sortorder: "asc",
					usepager: true,
					title: 'Customer Details',
					useRp: true,
					rp: 15,
					multiSelect: true,
		    		showTableToggleBtn: false,
					width: 700,
					resizable:false,
					height: 260,
					preProcess: insertLinkCat,
			});
 		 	jQuery('#masterCat').flexOptions({
				url :  "services/adj_get_master_categories.php",
				params : [{
						name : 'category_id',
						value : 1,
				
						}]
			}).flexReload();
}
}
function insertLinkCat(data)
			{
				for( i = 0; i < data.rows.length; i++) 
				{
					if(data.rows[i].cell['is_active']==1)
					{
						data.rows[i].cell['option'] = "<a class='bold' style='color:green;cursor:pointer' onclick = 'activateDeativateCat(" + data.rows[i].id +',0'+','+'"'+data.rows[i].cell['category']+'"'+ ");'>Deactivate</a>";
					}
					  else{
					  	data.rows[i].cell['option'] = "<a onclick = 'activateDeativateCat(" + data.rows[i].id +',1'+','+'"'+data.rows[i].cell['category']+'"'+ ");' class='bold' style='color:#ff0000;cursor:pointer' >Activate</a>";
					  } 
					 data.rows[i].cell['optionEdit'] = "<a class='bold' style='color:green;cursor:pointer' onclick = 'updateCategory(" + data.rows[i].id +','+'"'+data.rows[i].cell['category']+'"'+ ");'>Edit</a>";
				
		        }
				return data;
}
function activateDeativateCat(id,is_active,category){

	$.ajax({
        dataType : "json",
        type : "POST",
         data : {
          category_id : "" + id + "",category : "'" + category + "'",user_ids : ""+user_ids+"",is_activ : "" + is_active + ""
        },
           url : 'services/adj_insert_update_categories.php',
	        success : function(response) {
	            jAlert(response.data[0].status_text, 'Message', function()
                     {
                         if(response.data[0].status_value==1){
                         	masterCat();
                         }
                     });
	        }
        });
}
function updateCategory(id,category){
	$("#addClass").replaceWith('<td id="addClass"><input type="button" id="updateBtn"  onclick="updateCategoryBtn('+id+')" name="updateBtn" value="Update"  class="status" style="margin-bottom: -9px; margin-left: 36px;width: 60px;float: left;" /><input type="button" id="clearUpdate"  onclick="clearBtn()" name="clearUpdate" value="Clear"  class="status" style="  margin-bottom: -9px; margin-left: 16px;width: 60px;float: right" /></td>');
	$('#categoryName').val(category);
}
		
function updateCategoryBtn(id){
	if($('#categoryName').val()==''){
		document.getElementById('categoryName').style.borderColor = '#ff0000';
        document.getElementById('categoryName').style.color = "#ff0000";
	}
	else{
	$.ajax({
        dataType : "json",
        type : "POST",
         data : {
          category_id : "" + id + "",category : "'" + $('#categoryName').val() + "'",user_ids : ""+user_ids+"",is_activ : "" + 1 + ""
        },
           url : 'services/adj_insert_update_categories.php',
	        success : function(response) {
	            jAlert(response.data[0].status_text, 'Message', function()
                     {
                         if(response.data[0].status_value==1){
                         	masterCat();clearBtn()
                         }
                     });
	        }
        });
      }
}
function clearBtn(){
 	$("#addClass").replaceWith('<td id="addClass"><input type="button" id="addCat"  onclick="addCategory()" name="addCat" value="Add"  class="status" style="  margin-bottom: -9px; margin-left: 36px;width: 60px;float: left;" /><input type="button" id="clearAdd"  onclick="clearBtn()" name="clearAdd" value="Clear"  class="status" style="  margin-bottom: -9px; margin-left: 16px;width: 60px;float: right" /></td>');
	$('#categoryName').val('');
	}
function addCategory(){
	if($('#categoryName').val()==''){
		document.getElementById('categoryName').style.borderColor = '#ff0000';
        document.getElementById('categoryName').style.color = "#ff0000";
	}
	else{
		$.ajax({
        dataType : "json",
        type : "POST",
         data : {
          category_id : "" + 0 + "",category : "'" + $('#categoryName').val() + "'",user_ids : ""+user_ids+"",is_activ : "" + 1 + ""
        },
           url : 'services/adj_insert_update_categories.php',
	        success : function(response) {
	            jAlert(response.data[0].status_text, 'Message', function()
                     {
                         if(response.data[0].status_value==1){
                         	masterCat();
                         }
                     });
	        }
        });
	}
}	
function categoryNameChk(){
    var categoryName = document.getElementById("categoryName");
    if(categoryName.value == "") {
        categoryName.style.borderColor = '#ff0000';
        categoryName.style.color = "#ff0000";
    }
    else {
        categoryName.style.borderColor = '';
        categoryName.style.color = "#000000";
    }
}