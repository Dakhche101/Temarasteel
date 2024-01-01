<section id="contact" class="contact_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container contact-form">
            <form method="POST" action="{{route('send')}}">
              @csrf
              <div>
                <input type="text" name="name" placeholder="Your Name" />
              </div>
              <div>
                <input type="tel" placeholder="Phone Number" name="phone" pattern="(\+212|06|07)[0-9]{8}" required/>
              </div>
              <div>
                <input type="email" placeholder="Email" name="email" required />
              </div>
              <div>
                <input type="text" class="message-box" name="message" placeholder="Message" required/>
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMfap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d998.8054068184126!2d-6.924008294481607!3d33.9117065947302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda70d81b27def51%3A0xc54f10b84976dc66!2sTemara%20Steel!5e1!3m2!1sfr!2sma!4v1701610441616!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>