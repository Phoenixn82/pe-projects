class TextScramble {
  constructor(el) {
    this.el = el
    this.chars = '!<>-_\\/[]{}—=+*^?#________'
    this.update = this.update.bind(this)
  }
  setText(newText) {
    const oldText = this.el.innerText
    const length = Math.max(oldText.length, newText.length)
    const promise = new Promise((resolve) => this.resolve = resolve)
    this.queue = []
    for (let i = 0; i < length; i++) {
      const from = oldText[i] || ''
      const to = newText[i] || ''
      const start = Math.floor(Math.random() * 40)
      const end = start + Math.floor(Math.random() * 40)
      this.queue.push({ from, to, start, end })
    }
    cancelAnimationFrame(this.frameRequest)
    this.frame = 0
    this.update()
    return promise
  }
  update() {
    let output = ''
    let complete = 0
    for (let i = 0, n = this.queue.length; i < n; i++) {
      let { from, to, start, end, char } = this.queue[i]
      if (this.frame >= end) {
        complete++
        output += to
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.10) {
          char = this.randomChar()
          this.queue[i].char = char
        }
        output += `<span class="dud">${char}</span>`
      } else {
        output += from
      }
    }
    this.el.innerHTML = output
    if (complete === this.queue.length) {
      this.resolve()
    } else {
      this.frameRequest = requestAnimationFrame(this.update)
      this.frame++
    }
  }
  randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)]
  }
}

// ——————————————————————————————————————————————————
// Example
// ——————————————————————————————————————————————————

const phrases = [  { text: 'Hi!', delay: 1000 },  { text: 'My name is Phoenix', delay: 1000 },  { text: 'I specialize in all things web development', delay: 1000 },  { text: 'Click here to learn more about me', delay: 1000 }, { text: 'Click here to learn more about me', delay: 10000 }]

const el = document.querySelector('.text-scramble-js')
const fx = new TextScramble(el)

let currentPhraseIndex = 0
const next = () => {
  const { text, delay } = phrases[currentPhraseIndex]
  setTimeout(() => {
    fx.setText(text).then(() => {
      if (currentPhraseIndex === phrases.length - 1) {
        // For the last phrase, simply call next() without any delay
        next()
      } else {
        currentPhraseIndex++
        setTimeout(next, delay)
      }
    })
  }, delay)
}

next()