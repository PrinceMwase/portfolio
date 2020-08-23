$(document).ready( function(){
    let categoryList = $('li.category');
    let gooniesection = $('section.gooniesection');
    let actionList = $('ul.actions');

    // handle hover and click events
    categoryList.hover(function(){

        // change color on hover
    $(this).css({'backgroundColor': '#595b5e', 'cursor' : 'pointer' });
    },function(){
        // remove color whe out of hover
    $(this).css({'backgroundColor': 'transparent' });
    } ).on('click', function(){
        
        // on click evente
        // get category's id
        let id = $(this).css({'backgroundColor': '#595b5e' }).attr('id');

        // track active list
        let listState ;

        // remove acive class if it has it
        if( $(this).hasClass('active') ){

            $('li.category:not(.active)').slideToggle();

            $(this).removeClass('active');

            listState = 0;
            gooniesection.html(" ");
            actionList.html(" ")
            
        }else{
               // add an active to it 
                $(this).addClass('active');
                listState =1;
                
        }

    // loop through each category
    if(listState === 1)
    categoryList.each( function(x, y){

        // remove every category  that doesnt match the id
            if( $(y).attr('id') !== id ){           
                
                $(y).slideToggle();   
            }else{
                // fetch data

                fetchData(id, gooniesection, actionList);

                // done fetching
            }
      })
        

    });


})
function fetchData(id, gooniesection, actionList, link = $.get(`goon/${id}`) ) {
    let getGoonies = link;

    getGoonies.done(function (data) {
        gooniesection.html(" ");
        actionList.html(" ")
      
        
        for (const goon of data.data) {
            let post = `
            <div>
              <span class="image main"><img src="/${goon.image}" alt="" /> </span> 
                            <blockquote>
                            ${goon.words} #${$('#' + goon.category_id).text()}
                            </blockquote>
                            <ul class="icons">
                            
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                            </ul>
            </div>
          `;
            gooniesection.append(post);
        }
        if (data.prev_page_url)
            actionList.append(`<li><a href="${data.prev_page_url}" class="button small paginationButton icon solid fa-arrow-left">Prev</a></li>`);

            actionList.append(`<li> ${data.current_page} / ${data.last_page} </li>`);

        if (data.next_page_url)
            actionList.append(`<li><a href="${data.next_page_url}" class="button small paginationButton icon solid fa-arrow-right">Next</a></li>`);
        
            $('a.paginationButton').on('click', function(event){
                event.preventDefault();
                fetchData(0, gooniesection, actionList, $.get( $(this).attr('href') ) );

            } );


        if (data.data.length === 0) {
            gooniesection.html('<blockquote>No Content Available</blockquote>');
        }
    });
}

