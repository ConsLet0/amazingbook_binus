@include("material.scriptlink")
<link rel="stylesheet" href="css/homestyle.css">

<header>
    @include("layouts.navbar")
    <h1 class="title">THE BEST WAY TO RENT EBOOKS</h1>
    <img class="fondoHeader imagenes" src="images/mobile/image-header.jpg" alt="">
  </header>

  <main>
    <section class="features">
      <div class="featImg egg"><img class="imagenes" src="images/mobile/image-transform.jpg" alt=""></div>

      <div class="featTxt text1">
        <h1>Ebooks Description</h1>
        <p> An ebook (short for electronic book), also known as an e-book or eBook, is a book publication made available in digital form, 
          consisting of text, images, or both, readable on the flat-panel display of computers or other electronic devices. Although sometimes 
          defined as "an electronic version of a printed book", some e-books exist without a printed equivalent.
        </p>
      </div>

      <div class="featImg cup"><img class="imagenes" src="images/mobile/image-stand-out.jpg" alt=""></div>

      <div class="featTxt text2">
        <h1>Characteristic</h1>
        <p>For starters, eBooks are files that you can read on a digital device – a tablet, smartphone, computer, etc. But again, considering 
          other files can be read on digital devices (i.e. word documents) eBooks have specific characteristics that differentiate them.</p>
      </div>

    </section>
  </main>

@include("layouts.footer")

@include("material.scriptjs")