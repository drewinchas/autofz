ARG PREFIX
FROM $PREFIX/base

WORKDIR /fuzzer

RUN git clone https://github.com/google/AFL.git afl && \
    cd /fuzzer/afl && \
    AFL_NO_X86=1 make && AFL_NO_X86=1 make -C llvm_mode && AFL_NO_X86=1 make install

WORKDIR /
# https://github.com/google/fuzzbench/blob/master/fuzzers/afl/builder.Dockerfile

ENV CC=afl-clang-fast \
    CXX=afl-clang-fast++
