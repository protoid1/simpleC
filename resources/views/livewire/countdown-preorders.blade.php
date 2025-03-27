<div class="text-center">
    <h2 class="text-2xl font-bold">Countdown Timer</h2>
    <p id="countdown" class="text-lg text-red-500"></p>

    @if($timeRemaining > 0)
        <script>
            // Ambil waktu dari server
            let timeRemaining = {{ $timeRemaining }};
            
            function updateCountdown() {
                if (timeRemaining <= 0) {
                    document.getElementById('countdown').innerHTML = "Waktu Habis!";
                    return;
                }

                let days = Math.floor(timeRemaining / 86400);
                let hours = Math.floor((timeRemaining % 86400) / 3600);
                let minutes = Math.floor((timeRemaining % 3600) / 60);
                let seconds = timeRemaining % 60;

                document.getElementById('countdown').innerHTML =
                    `${days} Hari ${hours} Jam ${minutes} Menit ${seconds} Detik`;

                timeRemaining--;
                setTimeout(updateCountdown, 1000);
            }

            updateCountdown();

            // Minta update dari server setiap 1 menit untuk sinkronisasi
            setInterval(() => {
                @this.call('updateTimeRemaining');
                timeRemaining = {{ $timeRemaining }};
            }, 60000);
        </script>
    @endif
</div>
