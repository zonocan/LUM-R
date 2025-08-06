document.addEventListener('DOMContentLoaded', function () {
  const questions = document.querySelectorAll('.faq-question');
  questions.forEach((q) => {
    q.addEventListener('click', function () {
      const answer = this.nextElementSibling;
      const isOpen = answer.classList.contains('open');
      document.querySelectorAll('.faq-answer').forEach((a) => a.classList.remove('open'));
      document.querySelectorAll('.faq-question').forEach((q) => q.classList.remove('active'));
      if (!isOpen) {
        answer.classList.add('open');
        this.classList.add('active');
      }
    });
  });
});