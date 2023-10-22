<script>
    import pictureForm from "../../public/assets/img-4.png";
    let selectedEps = '';
    let selectedService = '';
    let contentAPI = [];
    let form;
    

    const handleSubmit = (event) => {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario
        console.log('EPS seleccionada:', selectedEps);
        console.log('Servicio seleccionado:', selectedService);

        const data = new FormData(form);
        fetch('http://localhost/MediPoint/backend/api/post.php', {
            method: 'POST',
            body: data,
        })
        .then(res => res.json())
        .then(data => {
            console.log(data);
            contentAPI = data;
        });
    };
</script>

<main>
    <div class="epsSelection">
        <div class="form-container">
            <form on:submit={handleSubmit} bind:this={form}>
                <label for="eps">Selecciona tu eps: </label><br />
                <select id="eps" name="eps" bind:value={selectedEps}>
                    <option value="sura">Sura</option>
                    <option value="comfama">Comfama</option>
                    <option value="sanitas">Sanitas</option>
                    <option value="neweps">Nueva Eps</option>
                </select><br /><br />
                <label for="servicio">Selecciona tu servicio:</label><br>
                <select id="servicio" name="servicio" bind:value={selectedService}>
                    <option value="pediatria">Pediatría</option>
                    <option value="odontologia">Odontología</option>
                    <option value="adultos">Adultos</option>
                </select><br /><br />
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="picture-container">
            <img src={pictureForm.src} alt="Selección EPS">
        </div>
    </div>
    
    <div class="card-content">
            <!-- Iterar por las respuestas del Fetch -->
            {#if contentAPI.data && contentAPI.data.length > 0}
                {#each contentAPI.data as item (item.id)}
                <div class="card">
                    <div class="content">
                    <p class="heading">{item.nombre_centromed}</p>
                    <p class="para">{item.direccion_centromed}</p>
                    <p class="para">{item.telefono_centromed}</p>
                    <p class="para">{item.tiempo_centromed}</p>
                    <button class="btn">Read more</button>
                    </div>
                </div>
                {/each}
            {:else}
                <p>No hay datos disponibles.</p>
            {/if}
    </div>
</main>



<style>
    main .card-content {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr));
        justify-items: center;
    }

    .card {
        margin: 30px 0;
        position: relative;
        display: flex;
        width: 300px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        padding: 32px;
        overflow: hidden;
        border-radius: 10px;
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
        color: #BF8092;
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
    }

    .content .heading {
        font-weight: 900;
        font-size: 20px;
    }

    .content .para {
        line-height: 1.3;
    }

    .content .btn {
        color: #191919;
        text-decoration: none;
        padding: 10px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100% );
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .card::before {
        content: "";
        position: absolute;
        right: 0;
        bottom: 0;
        width: 5px;
        height: 100%;
        background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100% );
        z-index: -1;
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
    }

    .card:hover::before {
        width: 100%;
    }

    .card:hover {
        box-shadow: none;
    }

    .card:hover .btn {
        color: #212121;
        background: rgb(131, 88, 230)e8e8;
    }

    .content .btn:hover {
        outline: 2px solid #e8e8e8;
        background: transparent;
        color: #000;
    }

    .content .btn:active {
        box-shadow: none;
    }

    .epsSelection {
        max-width: 1024px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        justify-items: center;
        background-color: #39AF97;
        border-radius: 20px;
    }
    .epsSelection .form-container {
        width: 100%;
        padding: 0 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .epsSelection .picture-container {
        width: 100%;
        height: 100%;
        padding: 20px;
        border-radius: 0 20px 20px 0;
        background-color: #BF8092;
    }
    .epsSelection .form-container label {
        font-size: 1.3rem;
        font-weight: 700;
        color: #FFF;
    }
    .epsSelection .form-container select {
        margin-top: 5px;
        height: 35px;
        width: 100%;
        padding: 0 10px;
        outline: none;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        background-color: #ece2e5;
        font-family: 'nunito', sans-serif;
        font-size: 16px;
    }

    .epsSelection .form-container button {
        margin-top: 20px;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        background-image: linear-gradient(-180deg,#BF8092 , #a84864);
        text-transform: uppercase;
        letter-spacing: 4px;
        font-size: 1rem;
        font-weight: 900;
        font-family: 'Nunito' sans-serif;
        color: #fff;
        outline: none;
    }

    @media (max-width: 768px) {
        .epsSelection {
            grid-template-columns: 1fr;
            grid-column: 1fr 1fr;
        }
        .epsSelection .picture-container {
            margin: 20px 0 0 0;
        }
        .epsSelection .form-container {
            padding: 20px;
        }
    }
</style>
