  <!-- Modern Parallax Section with Content - Dark Theme -->
  <section id="parallax" class="relative overflow-hidden bg-gradient-to-br from-[#1E293B] via-[#334155] to-[#0F172A]">
      <div class="parallax-background relative h-[500px] w-full bg-cover bg-center bg-no-repeat md:h-[600px] lg:h-[700px] lg:bg-fixed"
          @if (isset($settings['experience_section_image']) && $settings['experience_section_image']) style="background-image:url('{{ Storage::url($settings['experience_section_image']) }}');" @endif>

          <!-- Dark Gradient Overlay -->
          <div class="absolute inset-0 z-[1] bg-gradient-to-br from-[#0F172A]/95 via-[#1E293B]/90 to-[#334155]/95"></div>

          <!-- Pattern Overlay -->
          <div class="absolute inset-0 z-[2] opacity-10"
              style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
          </div>

          <!-- Content Container -->
          <div class="relative z-[10] flex h-full items-center justify-center py-16 md:py-20 lg:py-24">
              <div class="container">
                  <div class="mx-auto max-w-4xl px-4 text-center">

                      <!-- Stats or CTA Content -->
                      <div class="parallax-content" animate="up">
                          <h2 class="mb-6 text-4xl font-black leading-tight text-white md:text-5xl lg:text-6xl">
                              {{ $settings['experience_section_title'] }}
                          </h2>
                          <p class="mb-10 text-xl leading-relaxed text-white/95 md:text-2xl">
                              {{ $settings['experience_section_subtitle'] }}
                          </p>

                          <!-- Stats Grid -->
                          <div class="mb-10 grid grid-cols-2 gap-6 md:grid-cols-3 md:gap-8">
                              @foreach ($experienceStats as $experience_stat)
                                  <div class="stat-item rounded-2xl border border-[#14b8a6]/30 bg-gradient-to-br from-[#14b8a6]/20 to-[#87C8C6]/10 p-6 backdrop-blur-md transition-all duration-300 hover:border-[#14b8a6]/50 hover:from-[#14b8a6]/30 hover:to-[#87C8C6]/20"
                                      animate="zoom" style="transition-delay: 0.1s">
                                      <div
                                          class="mb-2 bg-gradient-to-r from-[#14b8a6] to-[#5ee8e0] bg-clip-text text-4xl font-black text-transparent md:text-5xl">
                                          {{ $experience_stat['value'] }}</div>
                                      <div
                                          class="text-sm font-semibold uppercase tracking-wide text-white/90 md:text-base">
                                          {{ $experience_stat['title'] }}</div>
                                  </div>
                              @endforeach
                          </div>

                          <!-- CTA Button -->
                          @if ($settings['experience_section_button'])
                              <div animate="up" style="transition-delay: 0.5s">
                                  <a href="#contact" class="inline-block">
                                      <button
                                          class="parallax-cta-button rounded-full bg-gradient-to-r from-[#14b8a6] to-[#87C8C6] px-8 py-4 text-lg font-bold uppercase tracking-wide text-white shadow-2xl transition-all duration-300 hover:scale-105 hover:shadow-[0_0_40px_rgba(20,184,166,0.6)]">
                                          {{ $settings['experience_section_button'] }}
                                      </button>
                                  </a>
                              </div>
                          @endif
                      </div>

                  </div>
              </div>
          </div>

          <!-- Decorative Elements -->
          <div class="absolute right-10 top-10 z-[3] h-32 w-32 animate-pulse rounded-full bg-white/10 blur-2xl"></div>
          <div class="absolute bottom-10 left-10 z-[3] h-40 w-40 animate-pulse rounded-full bg-white/10 blur-2xl"
              style="animation-delay: 1s;"></div>

      </div>
  </section>
