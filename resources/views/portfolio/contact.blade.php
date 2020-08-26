<!-- Contact -->
                        <article id="contact">
                            <h2 class="major">Contact us</h2>
                            <form class="contactForm" method="post" action="#">
                                @csrf
                                <div class="fields">
                                    <div class="field" id="contactFormMessage">
                                      
                                    </div>
                                    <div class="field half">
                                        <label for="name">Name</label>
                                        <input type="text" required name="name" id="name" />
                                    </div>
                                    <div class="field half">
                                        <label for="email">Email</label>
                                        <input type="email" required  name="email" id="email" />
                                    </div>
                                    <div class="field">
                                        <label for="message">Message</label>
                                        <textarea name="message" required id="message" rows="4"></textarea>
                                    </div>
                                </div>
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" class="primary" /></li>
                                    <li><input type="reset" value="Reset" /></li>
                                </ul>
                            </form>
                            <h3>find me</h3>
                            <p>+265 88 465 2513<br>+265 88 427 7656 </p>
                            <p>helix@tikwele.com</p>
                            <ul class="icons">
                                <li><a href="mailto:princefranklinemwase@gmail.com" class="icon brands fa-google"><span class="label">Twitter</span></a></li>
                                <li><a href="http://facebook.com/prince.mwase.5" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                               
                                <li><a href="https://github.com/PrinceMwase" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                            </ul>
                        </article>
                        <Script>
                            $(document).ready(function(){
                                $('form.contactForm').on('submit', function(event){
                                    event.preventDefault();

                                    let $this = $(this);

                                   let formSubmision = $.post("{{url('feedback')}}", $this.serialize() );

                                    formSubmision.done ( function(data, x, y){
                                    
                                       if( y.responseText == "1"){
                                            $('<code>Your Message has been received</code>').appendTo( $('#contactFormMessage'))
                                       }
                                        
                                        
                                    } );
                                    
                                    formSubmision.fail( function(){
                                        $('#contactFormMessage').html('<code>Failed to send Your message</code>')
                                    } );

                                } )
                            });
                        </Script>