ARG PREFIX
FROM $PREFIX/base

WORKDIR /fuzzer

RUN git clone https://github.com/mboehme/aflfast && \
    cd aflfast && \
    AFL_NO_X86=1 make && AFL_NO_X86=1 make install

ENV CC=afl-gcc \
    CXX=afl-g++
