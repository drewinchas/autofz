ARG PREFIX
FROM $PREFIX/base

RUN mkdir -p /fuzzer

RUN apt update && \
    apt install -y llvm-13 llvm-13-dev clang-13 lld-13 lldb-13
RUN update-alternatives --install /usr/bin/clang clang /usr/bin/clang-13 200 && \
   update-alternatives --install /usr/bin/clang++ clang++ /usr/bin/clang++-13 200 && \
   update-alternatives --install /usr/bin/llvm-config llvm-config /usr/bin/llvm-config-13 200 && \
   update-alternatives --install /usr/bin/lldb lldb /usr/bin/lldb-13 200 

ENV LLVM_CONFIG=llvm-config-13
ENV AFL_SKIP_CPUFREQ=1
ENV AFL_I_DONT_CARE_ABOUT_MISSING_CRASHES=1
 
WORKDIR /fuzzer
RUN git clone https://github.com/AFLplusplus/AFLplusplus.git afl++

WORKDIR /fuzzer/afl++

RUN make clean && \
  make -j source-only && make install

RUN cd custom_mutators/radamsa && \
  make -j


ENV CC=afl-clang-fast \
  CXX=afl-clang-fast++
