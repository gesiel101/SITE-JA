<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-black overflow-hidden">
        <div class="container relative z-20 px-4 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-sm font-semibold mb-6 backdrop-blur-sm">
                Sites Profissionais em 72h
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tighter text-white mb-6">
                Seu site profissional <br/>
                <span class="text-primary text-glow">em até 72 horas</span>
            </h1>
            
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                Criamos sites rápidos, modernos e focados em gerar contatos e vendas.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://wa.me/559491614484" target="_blank" class="bg-primary text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-primary/90 shadow-[0_0_20px_rgba(57,255,20,0.4)] transition-all flex items-center gap-2">
                    Solicitar Orçamento
                </a>
                <a href="#pricing" class="border-2 border-primary text-primary px-8 py-4 rounded-xl font-bold text-lg hover:bg-primary/10 transition-all">
                    Ver Nossos Planos
                </a>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="py-12 border-y border-white/5 bg-black/20 text-center">
        <div class="container mx-auto px-4 grid grid-cols-2 md:grid-cols-3 gap-8">
            <div>
                <div class="text-3xl md:text-4xl font-bold text-primary mb-1">+100</div>
                <div class="text-xs md:text-sm text-gray-400 uppercase tracking-widest">Sites entregues</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-primary mb-1">100%</div>
                <div class="text-xs md:text-sm text-gray-400 uppercase tracking-widest">Design Responsivo</div>
            </div>
            <div class="col-span-2 md:col-span-1">
                <div class="text-3xl md:text-4xl font-bold text-primary mb-1">72h</div>
                <div class="text-xs md:text-sm text-gray-400 uppercase tracking-widest">Entrega média</div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-24 bg-black">
        <div class="container mx-auto px-4 text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold mb-4">Como Funciona</h2>
            <p class="text-gray-400">Processo simplificado para você ter seu site no ar sem dor de cabeça.</p>
        </div>
        
        <div class="container mx-auto px-4 grid md:grid-cols-3 gap-8">
            <div class="bg-secondary p-8 rounded-2xl border border-white/5 text-center relative group">
                <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-primary text-black font-bold flex items-center justify-center text-sm">1</span>
                <h3 class="text-xl font-bold mb-3">Escolha o plano</h3>
                <p class="text-gray-400">Selecione o pacote ideal.</p>
            </div>
            <div class="bg-secondary p-8 rounded-2xl border border-white/5 text-center relative group">
                <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-primary text-black font-bold flex items-center justify-center text-sm">2</span>
                <h3 class="text-xl font-bold mb-3">Envie as informações</h3>
                <p class="text-gray-400">Nos envie o conteúdo via WhatsApp.</p>
            </div>
            <div class="bg-secondary p-8 rounded-2xl border border-white/5 text-center relative group">
                <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-primary text-black font-bold flex items-center justify-center text-sm">3</span>
                <h3 class="text-xl font-bold mb-3">Site pronto em 72h</h3>
                <p class="text-gray-400">Seu site no ar com rapidez.</p>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="py-24 bg-black">
        <div class="container mx-auto px-4 text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-primary">Nossos Planos</h2>
            <p class="text-gray-400">Investimento único. Resultado contínuo.</p>
        </div>
        
        <div class="container mx-auto px-4 grid md:grid-cols-3 gap-8 max-w-6xl">
            <!-- Plan 1 -->
            <div class="bg-secondary/40 p-8 rounded-2xl border border-white/10 flex flex-col">
                <h3 class="text-xl font-bold mb-2">Landing Page</h3>
                <div class="text-3xl font-bold mb-4">R$ 599</div>
                <p class="text-gray-400 text-sm mb-8">Ideal para campanhas e vendas rápidas.</p>
                <ul class="text-sm space-y-4 mb-8 flex-1">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Página Única Premium</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> 100% Responsivo</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Botão WhatsApp</li>
                </ul>
                <a href="https://buy.stripe.com/dRmeVd01mfLT9Eg5Oy1B600" target="_blank" class="border-2 border-primary text-primary py-3 rounded-lg text-center font-bold hover:bg-primary/10 transition-all">Quero meu site agora</a>
            </div>
            
            <!-- Plan 2 (Popular) -->
            <div class="bg-secondary p-8 rounded-2xl border-2 border-primary flex flex-col scale-105 shadow-[0_0_30px_rgba(57,255,20,0.15)] relative">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-black font-bold px-4 py-1 rounded-full text-xs uppercase">Mais Popular</div>
                <h3 class="text-xl font-bold mb-2">Site Essencial</h3>
                <div class="text-3xl font-bold mb-4 text-primary">R$ 799</div>
                <p class="text-gray-400 text-sm mb-8">Perfeito para pequenas empresas e serviços.</p>
                <ul class="text-sm space-y-4 mb-8 flex-1">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Até 3 Páginas</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Design Premium</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> WhatsApp Flutuante</li>
                </ul>
                <a href="https://buy.stripe.com/eVqbJ101m0QZ2bOfp81B601" target="_blank" class="bg-primary text-black py-3 rounded-lg text-center font-bold hover:bg-primary/90 transition-all">Quero meu site agora</a>
            </div>
            
            <!-- Plan 3 -->
            <div class="bg-secondary/40 p-8 rounded-2xl border border-white/10 flex flex-col">
                <h3 class="text-xl font-bold mb-2">Site Profissional</h3>
                <div class="text-3xl font-bold mb-4">R$ 999</div>
                <p class="text-gray-400 text-sm mb-8">Autoridade máxima para o seu negócio.</p>
                <ul class="text-sm space-y-4 mb-8 flex-1">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Até 5 Seções</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Google Maps Incluso</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Blog de Notícias</li>
                </ul>
                <a href="https://buy.stripe.com/14A6oH01mbvDdUw6SC1B602" target="_blank" class="border-2 border-primary text-primary py-3 rounded-lg text-center font-bold hover:bg-primary/10 transition-all">Quero meu site agora</a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 bg-primary text-black text-center relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold mb-8">Sites profissionais prontos em até 72 horas</h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto font-medium">Processo simples, sem mensalidade e sem complicação. Atendemos um número limitado de projetos por semana.</p>
            <a href="https://wa.me/559491614484" target="_blank" class="bg-black text-primary px-8 py-5 rounded-xl font-bold text-lg inline-flex items-center gap-2 hover:scale-105 transition-all">
                SOLICITAR MEU SITE AGORA
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
