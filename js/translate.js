/*global $*/
console.log("outside");
$("#firstChoice").change(function() 
{
	console.log("In here!");
	var $dropdown = $(this);

	$.getJSON("json/countryToState.json", function(data) 
	{
		var key = $dropdown.val();
		console.log("inside");
		var vals = [];
							
		switch(key) 
		{
			case 'USA':
				vals = data.USA.split(",");
				break;
			case 'UK':
				vals = data.UK.split(",");
				break;
			case 'Brazil':
				vals = data.Brazil.split(",");
				break;
			case ' ':
				vals = ['Please choose from above'];
		}
		
		var $second_choice = $("#secondChoice");
		$second_choice.empty();
		$.each(vals, function(index, value) 
		{
			$second_choice.append("<option>" + value + "</option>");
		});
	});
});
$("#firstChoice2").change(function() 
{
	var $dropdown2 = $(this);

	$.getJSON("json/stateToCity.json", function(data) 
	{		
		
		var key2 = $dropdown2.val();
		var vals2 = [];
							
		switch(key2) 
		{
			case 'State':
				vals2 = data.state.split(",");
				break;
			case 'City':
				vals2 = data.city.split(",");
				break;
			case ' ':
				vals2 = ['Please choose from above'];
		}
		
		var $second_choice2 = $("#secondChoice2");
		$second_choice2.empty();
		$.each(vals2, function(index2, value2) 
		{
			$second_choice2.append("<option>" + value2 + "</option>");
		});
	});
});

// $("#submitFeatures").submit(function (event)
// {
//     //preventing default page reload
//     event.preventDefault();
    
//     //getting features
//     var eyes= $('#eyes').val();
//     var skin_color= $('#skin_color').val();
//     var height= $('#height').val();
//     var stature= $('#stature').val();
//     var hair= $('#hair').val();
    
//     $.ajax(
// 	{	//passing in the features from user into php database function
//         type : "POST",
//         url  : "features.php",            
//         dataType : "json",
//         data : {"eyes" : eyes,
//                 "skin_color" :skin_color,
//                 "height" : height,
//                 "stature" :stature,
//         		"hair" : hair
//         },            
//         success : function(data)
//         {
//             console.log("In success handler: "); 
//             if(data)
//             {
//                 //Empty because we don't need to output anything, 
//                 //This gets handled by php and submitted to our DB
//             }
//         },
//         complete: function(data,status) 
//         { //optional, used for debugging purposes
//             //debugger;
//           // alert(status);
//         }
//     });//AJAX
// });//handler


$("#submitAddOffender").submit(function (event)
{
    console.log("got em")
    //preventing default page reload
    event.preventDefault();
    
    //getting features
    var firstName= $('#firstName').val();
    var lastName= $('#lastName').val();
    var eyes= $('#eyes').val();
    var skin_color= $('#skin_color').val();
    var height= $('#height').val();
    var stature= $('#stature').val();
    var hair= $('#hair').val();
    var country= $('#country').val();
    var state= $('#state').val();
    var city= $('#city').val();
    var severity= $('#severity').val();
    
    console.log(eyes);

    
    $.ajax(
	{	//passing in the offender info from admin into php database function
        type : "POST",
        url  : "addOffenderData.php",            
        dataType : "json",
        data : {"firstName" : firstName,
                "lastName" : lastName,
                "eyes" : eyes,
                "skin_color" : skin_color,
                "height" : height,
                "stature" :stature,
        		"hair" : hair,
        		"country" : country,
                "state" : state,
                "city" : city,
                "severity" : severity
        },            
        success : function(data)
        {
            console.log("In success handler: "); 
            if(data)
            {
                alert("NEW OFFENDER ADDED!");
                //Empty because we don't need to output anything, 
                //This gets handled by php and submitted to our DB
            }
        },
        complete: function(data,status) 
        { //optional, used for debugging purposes
            //debugger;
           // alert(status);
        }
    });//AJAX
});//handler

$("#submitDeleteOffender").submit(function (event)
{
    //preventing default page reload
    event.preventDefault();
    
    //getting offender info
    var firstName= $('#firstName').val();
    var lastName= $('#lastName').val();
    var eyes= $('#eyes').val();
    var skin_color= $('#skin_color').val();
    var height= $('#height').val();
    var stature= $('#stature').val();
    var hair= $('#hair').val();
    var country= $('#country').val();
    var state= $('#state').val();
    var city= $('#city').val();
    var severity= $('#severity').val();
    
    $.ajax(
	{	//passing in the offender info from admin into php database function
	//but I don't want to pass it in, I wan't to delete it..
        type : "POST",
        url  : "deleteOffenderData.php",            
        dataType : "json",
        data : {"firstName" : firstName,
                "lastName" : lastName,
                "eyes" : eyes,
                "skin_color" : skin_color,
                "height" : height,
                "stature" :stature,
        		"hair" : hair,
        		"country" : country,
                "state" : state,
                "city" : city,
                "severity" : severity
        },            
        success : function(data)
        {
            console.log("In success handler: "); 
            if(data)
            {
                //Empty because we don't need to output anything, 
                //This gets handled by php and submitted to our DB
            }
        },
        complete: function(data,status) 
        { //optional, used for debugging purposes
            //debugger;
           // alert(status);
        }
    });//AJAX
});//handler

$("#matchingOffender").submit(function (event)
{
    //preventing default page reload
    event.preventDefault();
    
    //getting offender info
    var firstName= $('#firstName').val();
    var lastName= $('#lastName').val();
    var eyes= $('#eyes').val();
    var skin_color= $('#skin_color').val();
    var height= $('#height').val();
    var stature= $('#stature').val();
    var hair= $('#hair').val();
    var country= $('#country').val();
    var state= $('#state').val();
    var city= $('#city').val();
    var severity= $('#severity').val();
    
    $.ajax(
	{	
        type : "POST",
        url  : "matchingOffenderData.php",            
        dataType : "json",
        data : {"firstName" : firstName,
                "lastName" : lastName,
                "eyes" : eyes,
                "skin_color" : skin_color,
                "height" : height,
                "stature" :stature,
        		"hair" : hair,
        		"country" : country,
                "state" : state,
                "city" : city,
                "severity" : severity
        },            
        success : function(data)
        {
            console.log("In success handler: "); 
            if(data)
            {
                for(var i in data)
                {
                    console.log(data[i].firstName);
                    
                    $("#output").append(data[i].firstName);
                    $("#output").append(data[i].lastName);
                    $("#output").append(data[i].height);
                    $("#output").append(data[i].stature);
                    $("#output").append(data[i].skin_color);
                    $("#output").append(data[i].eyes);
                    $("#output").append(data[i].hair);
                    $("#output").append(data[i].country);
                    $("#output").append(data[i].state);
                    $("#output").append(data[i].city);
                    $("#output").append(data[i].severity);
                }
            }
        },
        complete: function(data,status) 
        { //optional, used for debugging purposes
            //debugger;
        //   alert(status);
        }
    });//AJAX
});//handler

$("#submitUpdateOffender").submit(function (event)
{
    //preventing default page reload
    event.preventDefault();
    
    //getting offender info
    var firstName= $('#firstName').val();
    var lastName= $('#lastName').val();
    var eyes= $('#eyes').val();
    var skin_color= $('#skin_color').val();
    var height= $('#height').val();
    var stature= $('#stature').val();
    var hair= $('#hair').val();
    var country= $('#country').val();
    var state= $('#state').val();
    var city= $('#city').val();
    var severity= $('#severity').val();
    
    $.ajax(
	{	
        type : "POST",
        url  : "updateInfoData.php",            
        dataType : "json",
        data : {"firstName" : firstName,
                "lastName" : lastName,
                "eyes" : eyes,
                "skin_color" : skin_color,
                "height" : height,
                "stature" :stature,
        		"hair" : hair,
        		"country" : country,
                "state" : state,
                "city" : city,
                "severity" : severity
        },            
        success : function(data)
        {
            console.log("In success handler: "); 
            if(data)
            {
                for(var i in data)
                {
                    console.log(data[i].firstName);
                    
                    $("#output").append(data[i].firstName);
                    $("#output").append(data[i].lastName);
                    $("#output").append(data[i].height);
                    $("#output").append(data[i].stature);
                    $("#output").append(data[i].skin_color);
                    $("#output").append(data[i].eyes);
                    $("#output").append(data[i].hair);
                    $("#output").append(data[i].country);
                    $("#output").append(data[i].state);
                    $("#output").append(data[i].city);
                    $("#output").append(data[i].severity);
                }
            }
        },
        complete: function(data,status) 
        { //optional, used for debugging purposes
            //debugger;
        //   alert(status);
        }
    });//AJAX
});//handler

$("#submitName").submit(function (event)
{
    //preventing default page reload
    event.preventDefault();
    
    //getting offender info
    var firstName= $('#firstName').val();
    var lastName= $('#lastName').val();
    
    $.ajax(
	{	
        type : "POST",
        url  : "nameData.php",            
        dataType : "json",
        data : {"firstName" : firstName,
                "lastName" : lastName
        },            
        success : function(data)
        {
            console.log("In success handler: "); 
            if(data)
            {
                for(var i in data)
                {
                    console.log(data[i].firstName);
                    
                    $("#output").append(data[i].firstName);
                    $("#output").append(data[i].lastName);
                    $("#output").append(data[i].height);
                    $("#output").append(data[i].stature);
                    $("#output").append(data[i].skin_color);
                    $("#output").append(data[i].eyes);
                    $("#output").append(data[i].hair);
                    $("#output").append(data[i].country);
                    $("#output").append(data[i].state);
                    $("#output").append(data[i].city);
                    $("#output").append(data[i].severity);
                }
            }
        },
        complete: function(data,status) 
        { //optional, used for debugging purposes
            //debugger;
        //   alert(status);
        }
    });//AJAX
});//handler

$("#submitFeatures").submit(function (event)
{
    //preventing default page reload
    event.preventDefault();
    
    //getting offender info
    var eyes= $('#eyes').val();
    var skin_color= $('#skin_color').val();
    var height= $('#height').val();
    var stature= $('#stature').val();
    var hair= $('#hair').val();
    
    $.ajax(
	{	
        type : "POST",
        url  : "featureData.php",            
        dataType : "json",
        data : {"eyes" : eyes,
                "skin_color" : skin_color,
                "height" : height,
                "stature" :stature,
        		"hair" : hair
        },            
        success : function(data)
        {
            console.log("In success handler: "); 
            if(data)
            {
                for(var i in data)
                {
                    console.log(data[i].firstName);
                    
                    $("#output").append(data[i].firstName);
                    $("#output").append(data[i].lastName);
                    $("#output").append(data[i].height);
                    $("#output").append(data[i].stature);
                    $("#output").append(data[i].skin_color);
                    $("#output").append(data[i].eyes);
                    $("#output").append(data[i].hair);
                    $("#output").append(data[i].country);
                    $("#output").append(data[i].state);
                    $("#output").append(data[i].city);
                    $("#output").append(data[i].severity);
                }
            }
        },
        complete: function(data,status) 
        { //optional, used for debugging purposes
            //debugger;
        //   alert(status);
        }
    });//AJAX
});//handler

$("#submitLocation").submit(function (event)
{
    //preventing default page reload
    event.preventDefault();
    
    //getting offender info
    var country= $('#country').val();
    var state= $('#state').val();
    var city= $('#city').val();
    
    $.ajax(
	{	
        type : "POST",
        url  : "locationData.php",            
        dataType : "json",
        data : {"country" : country,
                "state" : state,
                "city" : city,
        },            
        success : function(data)
        {
            console.log("In success handler: "); 
            if(data)
            {
                for(var i in data)
                {
                    console.log(data[i].firstName);
                    
                    $("#output").append(data[i].firstName);
                    $("#output").append(data[i].lastName);
                    $("#output").append(data[i].height);
                    $("#output").append(data[i].stature);
                    $("#output").append(data[i].skin_color);
                    $("#output").append(data[i].eyes);
                    $("#output").append(data[i].hair);
                    $("#output").append(data[i].country);
                    $("#output").append(data[i].state);
                    $("#output").append(data[i].city);
                    $("#output").append(data[i].severity);
                }
            }
        },
        complete: function(data,status) 
        { //optional, used for debugging purposes
            //debugger;
        //   alert(status);
        }
    });//AJAX
});//handler

