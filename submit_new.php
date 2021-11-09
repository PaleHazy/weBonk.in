<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>weBONK</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/jpg" href="img/weBONK_Favicon.png"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  <link href="css/memesubmitform.css" type="text/css" rel="stylesheet"/>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-S6VJPCLSZD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-S6VJPCLSZD');
  </script>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JL3HC5');</script>
<!-- End Google Tag Manager -->
</head>

<body class="black white-text">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JL3HC5"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
      <!-- Navigation Bar -->
      <div class="navbar-fixed text-orange">

        <!-- Dropdown Structure -->
        <ul id="navbar-dropdown" class="dropdown-content">
          <li><a href="https://dogebonk.com">DogeBonk.com</a></li>
          <li><a href="https://bonkswap.com">BonkSwap.com</a></li>
          <li class="divider"></li>
          <li><a href="https://www.dextools.io/app/bsc/pair-explorer/0xbe80839a3be4d3953d5588a60a11aeaed286b593#utm_source=dogebonk.com">
            DexTools
          </a></li>
          <li><a href="https://poocoin.app/tokens/0xae2df9f730c54400934c06a17462c41c08a06ed8">PooCoin</a></li>
          <li><a href="https://charts.bogged.finance/0xAe2DF9F730c54400934c06a17462c41C08a06ED8">BOGCharts</a></li>
        </ul>

        <nav class="grey darken-5" role="navigation">

          <div class="nav-wrapper">
            <a id="logo-container" href="index.php" class="brand-logo">
              <img class="left-align align-text-top" src="img/weBONK_Logo-Transparent.png" alt="weBonk logo">
            </a>

            <!-- Normal Nav Bar -->
            <ul class="main-nav right hide-on-med-and-down">
              <li class="waves-effect"><a href="index.php">HOME</a></li>
              <li class="waves-effect"><a class="active" href="#">SUBMIT</a></li>
              <li class="waves-effect"><a href="featured.html">
                FEATURED
              </a></li>
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-trigger" href="#!" data-target="navbar-dropdown">DOGEBONK<i class="material-icons dropdown-arrow right">arrow_drop_down</i></a></li>
            </ul>

            <!-- Mobile Menu Trigger -->
            <a href="#" data-target="nav-mobile" class="sidenav-trigger right">
              <i class="material-icons">menu</i>
            </a>
          </div>
        </nav>
      </div>

      <!-- Mobile Nav Bar -->
      <ul id="nav-mobile" class="sidenav right-align">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="#!">Submit</a></li>
        <li><a class="active" href="featured.html">Featured</a></li>
        <li><div class="divider"></div></li>
        <li><a href="https://dogebonk.com">DogeBonk.com</a></li>
        <li><a href="https://bonkswap.com">BonkSwap.com</a></li>
        <li class="divider"></li>
        <li><a href="https://www.dextools.io/app/bsc/pair-explorer/0xbe80839a3be4d3953d5588a60a11aeaed286b593#utm_source=dogebonk.com">
          DexTools
        </a></li>
        <li><a href="https://poocoin.app/tokens/0xae2df9f730c54400934c06a17462c41c08a06ed8">PooCoin</a></li>
        <li><a href="https://charts.bogged.finance/0xAe2DF9F730c54400934c06a17462c41C08a06ED8">BOGCharts</a></li>
      </ul>
    </header>

    <main>
      <div class="container">
        <div id="drop-area">
          <form class="my-form center">
            <div class="row">
              <h6>Drag and drop your image here or click the button below to find it in file manager</h6>
            </div>

            <form action="#">
            <div class="file-field input-field">

              <div class="ph-button-theme btn">
                <span>File</span>
                <input type="file" for="fileElem" name="image" id="input-tag-of-file">
              </div>

              <div class="file-path-wrapper">
                <input id="file-input" class="file-path validate" type="text" readonly>
              </div>
            </div>
          </form>

          </form>
        </div>

        <div id="image-container">
          <div id="image-actual"></div>
          <div class="row center white-text">


            <div class="row">
              <div class="input-field col s12 m3 offset-m3">
                <input id="name-input" type="text">
                <label for="name-input white-text">Title</label>
              </div>

              <div class="input-field col s12 m3">
                <input id="creator-input" type="text">
                <label for="creator-input">Creator</label>
              </div>
            </div>

            <a class="ph-button-theme btn waves-effect waves-orange" id="upload-submit" onclick="uploadFile()" name="upload">
              UPLOAD
            </a>
          </div>
        </div>

      </div>

    </main>
  </body>

  <script>
    let my_file;
    let dropArea = document.getElementById("drop-area");
    let fileInputEl = document.getElementById("input-tag-of-file");

    fileInputEl.onchange = handleFileChange;
    function imageComponent(imgInstance) {

      const rel = document.createElement("div");
      rel.classList.add("img-rel");
      const abs = document.createElement("div");
      abs.classList.add("img-abs");
      const img = document.createElement("img");
      img.src = imgInstance.url;
      abs.appendChild(img);
      rel.appendChild(abs);
      return rel;
    }

    class Image {
      constructor(file) {
        this.file = file;
        this.name = file.name;
        this.type = file.type;
        this.createUrl(file);
      }
      
      createUrl(file) {
        if (file) {
          this.url = URL.createObjectURL(file);
        }
      }
    }
    
    class ImageHolder {
      constructor(imgEl, nameEl, creatorEl, fileEl) {
        this.imageContainerEl = imgEl;
        this.nameInputEl = nameEl;
        this.creatorInputEl = creatorEl;
        this.fileInputEl = fileEl;

        this.creator = "";
        this.uploadedImages = null;
        this.name = "";

        this.nameInputEl.oninput = this.nameHandler.bind(this)
        this.creatorInputEl.oninput = this.creatorHandler.bind(this)
      }

      nameHandler(e) {
        this.name = e.target.value;
      }

      creatorHandler(e) {
        this.creator = e.target.value;
      }

      addImage(image) {
        this.uploadedImage = image;
      }

      appendImages() {
        this.imageContainerEl.innerHTML = "";

        const im = imageComponent(this.uploadedImage);
        this.name = this.uploadedImage.name;
        // Sync file names
        this.fileInputEl.value = this.uploadedImage.name;
        this.imageContainerEl.appendChild(im);

      }

      clearImages() {
        this.uploadedImages = [];
      }
    }

    function updateFile (file) {
      console.log (file);
      my_file = file;
    }

    const imageHolder = new ImageHolder(
      document.getElementById("image-actual"),
      document.getElementById("name-input"),
      document.getElementById("creator-input"),
      document.getElementById("file-input")
    );

    ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
      dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
      e.preventDefault();
      e.stopPropagation();
    }

    ["dragenter", "dragover"].forEach((eventName) => {
      dropArea.addEventListener(eventName, highlight, false);
    });

    ["dragleave", "drop"].forEach((eventName) => {
      dropArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
      dropArea.classList.add("highlight");
    }

    function unhighlight(e) {
      dropArea.classList.remove("highlight");
    }

    dropArea.addEventListener("drop", handleDrop, false);

    function setImagesToBeUploaded(imageArray) {
      imageHolder.addImage(new Image(imageArray[0]));
      imageHolder.appendImages();
      //   imageHolder.imageContainerEl.innerHtml = imageComponent();
    }

    function handleFileChange(e) {
      imageHolder.clearImages();
      setImagesToBeUploaded(Array.from(e.target.files));
    }
    function handleDrop(e) {
      imageHolder.clearImages();
      let dt = e.dataTransfer;
      // console.log(dt);
      let files = dt.files;
      // console.log("files", files);

      const fyles = Array.from(files);
      // console.log("fyles", fyles);
      setImagesToBeUploaded(fyles);
      //   handleFiles(files);
    }

    function handleFiles(files) {
      //console.log(files);
      [...files].forEach(uploadFile);
    }

    function uploadFile(file) {
      //   console.log(imageHolder.uploadedImage.file)
      // console.log(imageHolder)
      let formData = new FormData();
      formData.append("file", imageHolder.uploadedImage.file);
      formData.append("title", imageHolder.name);
      formData.append("creator", imageHolder.creator);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
          }
      });
      $.ajax({
          url: "php/upload_meme.php",
          data: formData,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function (data) {
              console.log(data);
          },
          error: function () {

          }
      });
  }

</script>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</html>
