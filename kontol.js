        function toggleDropdown() {
            var dropdown = document.getElementById("dropdown");
            dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
        }

        function selectOption(name, value) {
            document.getElementById("selected-option").innerText = name;
            document.getElementById("script-value").value = value;
            document.getElementById("dropdown").style.display = "none";
        }

        // Tutup dropdown saat klik di luar elemen
        document.addEventListener("click", function(event) {
            var selectBox = document.querySelector(".custom-select");
            if (!selectBox.contains(event.target)) {
                document.getElementById("dropdown").style.display = "none";
            }
        });
        document.getElementById('runBtn').addEventListener('click', async () => {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const selectedScript = document.getElementById('script-value').value; // Mengambil nilai dari hidden input
    document.getElementById('output').innerText = 'sedang di proses harap tunggu...';

    if (!selectedScript) {
        document.getElementById('output').innerText = 'pilih server terlebih dahulu!';
        return;
    }

    try {
        const response = await fetch('https://nameless-pine-692d.dotaja.workers.dev', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email, password, script: selectedScript })
        });

        // Debugging: Lihat status dan body respons
        if (!response.ok) {
            const errorText = await response.text();
            throw new Error(`mungkin dia lelah`);
        }

        const result = await response.json();

        // Debugging: Cek hasil respons
        console.log(result);  // Melihat apa yang diterima dari server

        if (result.status === 'success') {
            document.getElementById('output').innerText = result.output;
        } else {
            document.getElementById('output').innerText = `lelah kayanya`;
        }
    } catch (error) {
        // Debugging: Tampilkan error
        console.error(error);
        document.getElementById('output').innerText = `lelah banget ini mah`;
    }
});
