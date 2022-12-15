document.addEventListener('DOMContentLoaded', () => {
  const button = document.getElementById('go-back')

  if (button) {
    button.addEventListener('click', () => {
      window.location.href = '/ecommerce-website/'
    })
  }
})
