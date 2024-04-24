ARG PREFIX
FROM $PREFIX/afl

WORKDIR /fuzzer

ENV AFL_NO_X86=1 \
    CC=afl-clang-fast \
    CXX=afl-clang-fast++

RUN git clone https://github.com/carolemieux/afl-rb.git && \
    cd afl-rb && \
#  git checkout e529c1f1b366 && \
    make && make install 
