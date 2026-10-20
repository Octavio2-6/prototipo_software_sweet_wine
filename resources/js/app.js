import 'flowbite'; 

document.addEventListener('livewire:navigated', () => {
    
  if (typeof initFlowbite === 'function') {

    initFlowbite();

  } else if (window.initFlowbite) {

    window.initFlowbite();

  };

});

document.addEventListener('livewire:init', () => {

  Livewire.hook('morph.updated', (el) => {

    if (typeof initFlowbite === 'function') {

      initFlowbite();

    }

  });
  
});