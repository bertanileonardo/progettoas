        // const text_descr = document.getElementById("description-place");
        // var currentSize;
        // function aumentaFont() {
        //     currentSize = parseFloat(text_descr.style.fontSize);
        //     console.log(currentSize);
        //     text_descr.style.fontSize = (currentSize + .1) + "em";
        // };
        // function riduciFont() {
        //     currentSize = parseFloat(text_descr.style.fontSize);
        //     console.log(currentSize);
        //     text_descr.style.fontSize = (currentSize - .1) + "em";
        // }

        var currentSize, related_text_index, related_audio_index, related_text, related_audio;
        function aumentaFont(x) {
            related_text_index = x.getAttribute("rel");
            //console.log(related_text_index);
            related_text = document.getElementById(related_text_index);
            //console.log(related_text);
            currentSize = parseFloat(related_text.style.fontSize);
            //console.log(currentSize);
            related_text.style.fontSize = (currentSize + .1) + "em";
        };
        function riduciFont(x) {
            related_text_index = x.getAttribute("rel");
            //console.log(related_text_index);
            related_text = document.getElementById(related_text_index);
            //console.log(related_text);
            currentSize = parseFloat(related_text.style.fontSize);
            //console.log(currentSize);
            related_text.style.fontSize = (currentSize - .1) + "em";
        }
        
        function handleBtnClick(event) {
          toggleButton(event.target);
        }
        function handleBtnKeyDown(event) {
          // Check to see if space or enter were pressed
          if (event.key === " " || event.key === "Enter" || event.key === "Spacebar") { // "Spacebar" for IE11 support
            // Prevent the default action to stop scrolling when space is pressed
            event.preventDefault();
            toggleButton(event.target);
          }
        }
        function toggleButton(element) {
          var audio = document.getElementById('audio');
          // Check to see if the button is pressed
          var pressed = (element.getAttribute("aria-pressed") == "true");
          // Change aria-pressed to the opposite state
          element.setAttribute("aria-pressed", !pressed);
          // toggle the play state of the audio file
          if(pressed) {
            audio.pause();
          } else {
            audio.play();
          }
        }