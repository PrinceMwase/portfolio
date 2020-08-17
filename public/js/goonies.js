$(document).ready( function(){
    console.log('prince');

    // handle hover and click events
    $('li.category').hover(function(){

        // change color on hover
    $(this).css({'backgroundColor': '#595b5e' });
    },function(){

        // remove color whe out of hover
    $(this).css({'backgroundColor': '#25282d' });
    } ).on('click', function(){
        
        // on click evente
        // get category's id
        let id = $(this).css({'backgroundColor': '#595b5e' }).attr('id');

        // loop through each category
      $('li.category').each( function(x, y){

        // remove every category  that doesnt match the id
            if( $(y).attr('id') !== id ){
                $(y).slideUp();   
            }else{
                // fetch data

                let getGoonies = $.get(`goon/${id}`);

                getGoonies.done( function(data){
                        for (const goon of data.data) {
                        

                            let post = `<span class="image main"><img src="/${goon.image}" alt="" /> </span> 
                            <blockquote>
                            ${goon.words} #${$('#'+goon.category_id).text() }
                            </blockquote>
                            <ul class="icons">
                            
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                            </ul>`
                            $('section.gooniesection').append(post);
                        }

                        if(data.data.length === 0){
                           
                            $('section.gooniesection').append( '<blockquote>No Content Available</blockquote>' )
                            
                        }
                        
                    
                    
                    
                });

                // done fetching
            }
      })
        

        
    });


})
