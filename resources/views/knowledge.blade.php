<x-guest-layout>
    <x-public-navigation />

    <div class="min-h-screen pt-24 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-gray-900 text-3xl font-extrabold tracking-tight mt-2 text-center">Tudástár</h1>
            <p class="my-4 text-xl text-gray-500 lg:mx-auto text-center">
                Tanulj tőlünk, és azoktól, akiktől mi tanulunk
            </p>
            <div class="flex flex-wrap pt-6 sm:pt-0">
                <x-blog-card
                    title="Első lépések"
                    :link="route('knowledge.show', 'elso-lepesek')"
                    description="Regisztráció után így tudod beosztani a pénzed." />
                <x-blog-card
                    title="Az alapok"
                    :link="route('knowledge.show', 'az-alapok')"
                    description="Néhány dolog, amit érdemes észben tartani költségvetés készítés közben." />
                <x-blog-card
                    title="Persely létrehozás példa"
                    :link="route('knowledge.show', 'persely-letrehozas-pelda')"
                    description="Néhány példa, iránymutatás, tipp perselyek létrehozására." />
                <x-blog-card
                    title="Persely célok beállítása"
                    :link="route('knowledge.show', 'cel-beallitasa')"
                    description="Mikor érdemes célt, határidőt beállítani, vagy fontosnak jelölni egy perselyt." />
                <x-blog-card
                    title="Az oldalról bővebben"
                    :link="route('knowledge.show', 'az-oldalrol-bovebben')"
                    description="Ha érdekel, hogy miért és hogyan készült az oldal." />
                <x-blog-card
                    title="Mi a problémád, mi a célod?"
                    :link="route('knowledge.show', 'mi-a-celod')"
                    description="Ha te is küzdesz az itt felsorolt problémákkal, akkor valószínűleg segítségedre lehet az program." />
                <x-blog-card
                        title="Akiktől mi tanultunk"
                        :link="route('knowledge.show', 'akiktol-mi-tanultunk')"
                        description="Sok minőségi, értékes tartalom, amiket mindenképpen érdemes elolvasni vagy megnézni." />
                <x-blog-card
                        title="Családi költségvetés, egyszerűen"
                        :link="route('knowledge.show', 'csaladi-koltsegvetes-egyszeruen')"
                        description="Néha nehezebb a családi költségvetés elkészítése, mint vállalati. Mit tehetünk?" />
                <x-blog-card
                        title="Így működik a beosztom.hu"
                        :link="route('knowledge.show', 'nullbazisu-koltsegvetes-tervezes')"
                        description="Mi is az a nullbázisú költségvetés tervezés, és miért nem fogsz tudni élni nélküle, ha egyszer elkezded használni?" />
                <x-blog-card
                        title="Tanuld meg beosztani a pénzed fiatalon"
                        :link="route('knowledge.show', 'tanuld-meg-beosztani-a-penzed-fiatalon')"
                        description="Kevés bevétel, sok kiadás. Mi a milliókhoz vezető úton az első lépés fiatalként?" />
                <x-blog-card
                        title="Diákhitel visszafizetés, törlesztés"
                        :link="route('knowledge.show', 'diakhitel-visszafizetes-torlesztes')"
                        description="A diákhitel felvétele egyszerű, visszafizetése és törlesztése azonban annál nehezebb." />
            </div>
        </div>
    </div>

    <x-footer />
</x-guest-layout>
