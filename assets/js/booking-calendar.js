/**
 * KM Personal - Booking Calendar
 * Custom calendar and booking system
 */

(function() {
  'use strict';

  // Check if custom booking exists
  const customBooking = document.querySelector('.custom-booking');
  if (!customBooking) return;

  // State
  let currentDate = new Date();
  let selectedDate = null;
  let selectedTime = null;

  // Available time slots (9:00 - 17:00)
  const availableSlots = [
    '09:00', '09:30', '10:00', '10:30',
    '11:00', '11:30', '12:00', '12:30',
    '13:00', '13:30', '14:00', '14:30',
    '15:00', '15:30', '16:00', '16:30'
  ];

  // Estonian month names
  const estonianMonths = [
    'Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni',
    'Juuli', 'August', 'September', 'Oktoober', 'November', 'Detsember'
  ];

  // Elements
  const calendarDays = document.getElementById('calendarDays');
  const currentMonthEl = document.getElementById('currentMonth');
  const prevMonthBtn = document.getElementById('prevMonth');
  const nextMonthBtn = document.getElementById('nextMonth');
  const selectedDateEl = document.getElementById('selectedDate');
  const timeslotsContainer = document.getElementById('timeslotsContainer');
  const bookingForm = document.getElementById('bookingForm');
  const appointmentForm = document.getElementById('appointmentForm');

  /**
   * Render calendar for current month
   */
  function renderCalendar() {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    // Update month display
    currentMonthEl.textContent = `${estonianMonths[month]} ${year}`;

    // Get first day of month
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);

    // Get day of week (0 = Sunday, adjust to Monday = 0)
    let startDay = firstDay.getDay() - 1;
    if (startDay < 0) startDay = 6;

    // Clear calendar
    calendarDays.innerHTML = '';

    // Add empty cells for days before month starts
    for (let i = 0; i < startDay; i++) {
      const emptyDay = document.createElement('button');
      emptyDay.className = 'calendar-day empty';
      emptyDay.disabled = true;
      calendarDays.appendChild(emptyDay);
    }

    // Add days of month
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    for (let day = 1; day <= lastDay.getDate(); day++) {
      const dayDate = new Date(year, month, day);
      const dayBtn = document.createElement('button');
      dayBtn.className = 'calendar-day';
      dayBtn.textContent = day;

      // Disable past dates and weekends
      const isWeekend = dayDate.getDay() === 0 || dayDate.getDay() === 6;
      const isPast = dayDate < today;

      if (isPast || isWeekend) {
        dayBtn.classList.add('disabled');
        dayBtn.disabled = true;
      } else {
        dayBtn.addEventListener('click', () => selectDate(dayDate));
      }

      // Mark today
      if (dayDate.toDateString() === today.toDateString()) {
        dayBtn.classList.add('today');
      }

      // Mark selected date
      if (selectedDate && dayDate.toDateString() === selectedDate.toDateString()) {
        dayBtn.classList.add('selected');
      }

      calendarDays.appendChild(dayBtn);
    }
  }

  /**
   * Select a date
   */
  function selectDate(date) {
    selectedDate = date;
    selectedTime = null;

    // Update UI
    renderCalendar();
    renderTimeSlots();

    // Update selected date text
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    selectedDateEl.textContent = date.toLocaleDateString('et-EE', options);

    // Hide booking form
    bookingForm.style.display = 'none';
  }

  /**
   * Render available time slots
   */
  function renderTimeSlots() {
    if (!selectedDate) {
      timeslotsContainer.innerHTML = '<p style="text-align:center;color:#999;">Vali esmalt kuupäev kalendrist</p>';
      return;
    }

    timeslotsContainer.innerHTML = '';

    availableSlots.forEach(time => {
      const slot = document.createElement('button');
      slot.className = 'timeslot';
      slot.textContent = time;

      // Randomly mark some as unavailable (in real app, check against database)
      const isUnavailable = Math.random() < 0.3;

      if (isUnavailable) {
        slot.classList.add('unavailable');
        slot.disabled = true;
      } else {
        slot.addEventListener('click', () => selectTimeSlot(time, slot));
      }

      timeslotsContainer.appendChild(slot);
    });
  }

  /**
   * Select a time slot
   */
  function selectTimeSlot(time, element) {
    selectedTime = time;

    // Remove previous selection
    document.querySelectorAll('.timeslot').forEach(slot => {
      slot.classList.remove('selected');
    });

    // Mark as selected
    element.classList.add('selected');

    // Show booking form
    bookingForm.style.display = 'block';

    // Set hidden field value
    const dateStr = selectedDate.toISOString().split('T')[0];
    document.getElementById('selectedDateTime').value = `${dateStr} ${time}`;

    // Scroll to form
    bookingForm.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  /**
   * Handle form submission
   */
  appointmentForm.addEventListener('submit', function(e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(appointmentForm);
    const data = {
      datetime: formData.get('datetime'),
      name: formData.get('name'),
      email: formData.get('email'),
      phone: formData.get('phone'),
      message: formData.get('message')
    };

    console.log('Booking data:', data);

    // In real application, send to server
    // For now, show success message
    alert(`✅ Broneering kinnitatud!\n\nKuupäev: ${selectedDate.toLocaleDateString('et-EE')}\nKellaaeg: ${selectedTime}\nNimi: ${data.name}\n\nSaatsime kinnituse aadressile ${data.email}`);

    // Reset form
    appointmentForm.reset();
    selectedDate = null;
    selectedTime = null;
    bookingForm.style.display = 'none';
    renderCalendar();
    timeslotsContainer.innerHTML = '<p style="text-align:center;color:#999;">Vali esmalt kuupäev kalendrist</p>';
    selectedDateEl.textContent = 'Vali esmalt kuupäev';
  });

  /**
   * Navigation buttons
   */
  prevMonthBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
  });

  nextMonthBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
  });

  // Initial render
  renderCalendar();
  renderTimeSlots();

})();
