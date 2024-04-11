ARG PREFIX
FROM $PREFIX/base

WORKDIR /fuzzer

RUN mkdir -p /fuzzer/libfuzzer /fuzzer/libfuzzer/build

WORKDIR /fuzzer/libfuzzer/

RUN apt install -y ninja-build 

RUN git clone --depth=1 --single-branch --branch fuzzer_sync https://github.com/phi-go/llvm-project.git

# Prior to building, we patch the benchmark_register.h header for building on Ubuntu 22.04 / gcc-11

RUN cd llvm-project && mkdir build && cd build && \
echo '--- ../llvm/utils/benchmark/src/benchmark_register.h	2024-02-08 12:14:26.617276516 +0000'$'\n'\
'+++ ../llvm/utils/benchmark/src/benchmark_register.h	2024-02-08 03:26:06.418424523 +0000'$'\n'\
'@@ -2,7 +2,8 @@'$'\n'\
' #define BENCHMARK_REGISTER_H'$'\n'\
' '$'\n'\
' #include <vector>'$'\n'\
'-'$'\n'\
'+#include <bit>'$'\n'\
'+#include <limits>'$'\n'\
' #include "check.h"'$'\n'\
' '$'\n'\
' template <typename T>' |patch ../llvm/utils/benchmark/src/benchmark_register.h && \
   cmake -G Ninja -DLLVM_TARGETS_TO_BUILD=Native -DCMAKE_BUILD_TYPE=Release \
   -DLLVM_ENABLE_PROJECTS='clang;compiler-rt' -DCMAKE_INSTALL_PREFIX=/fuzzer/libfuzzer ../llvm &&\
   ninja && ninja install

RUN cd /fuzzer/libfuzzer/llvm-project/compiler-rt/lib/fuzzer && ./build.sh
